<?php

namespace MultiFactorAuthentication\Tests\Unit;

use MultiFactorAuthentication\Models\MultiFactorAuthentication;
use MultiFactorAuthentication\Models\RecoveryCode;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;
use MultiFactorAuthentication\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PragmaRX\Google2FA\Google2FA;

class MultiFactorAuthenticationManagerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mfaManager = app(MultiFactorAuthenticationManager::class);
        
        // Create a test user model
        $this->user = new class extends \Illuminate\Foundation\Auth\User {
            protected $table = 'users';
            protected $fillable = ['name', 'email', 'password'];
        };
        
        // Create users table for testing
        \Illuminate\Support\Facades\Schema::create('users', function ($table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });

        $this->user->name = 'Test User';
        $this->user->email = 'test@example.com';
        $this->user->password = bcrypt('password');
        $this->user->save();
    }

    /** @test */
    public function it_can_generate_a_secret()
    {
        $secretData = $this->mfaManager->generateSecret($this->user);

        $this->assertArrayHasKey('secret', $secretData);
        $this->assertArrayHasKey('qr_code_url', $secretData);
        $this->assertNotEmpty($secretData['secret']);
        $this->assertNotEmpty($secretData['qr_code_url']);
        $this->assertStringContainsString('otpauth://totp', $secretData['qr_code_url']);
    }

    /** @test */
    public function it_can_verify_totp_code()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $code = $google2fa->getCurrentOtp($secret);

        $result = $this->mfaManager->verifyTotp($secret, $code);

        $this->assertTrue($result);
    }

    /** @test */
    public function it_rejects_invalid_totp_code()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $invalidCode = '000000';

        $result = $this->mfaManager->verifyTotp($secret, $invalidCode);

        $this->assertFalse($result);
    }

    /** @test */
    public function it_can_enable_totp_for_user()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $result = $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $this->assertTrue($result);

        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $this->assertNotNull($mfa);
        $this->assertTrue($mfa->enabled);
        $this->assertNotNull($mfa->verified_at);
    }

    /** @test */
    public function it_fails_to_enable_totp_with_invalid_code()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $invalidCode = '000000';

        $result = $this->mfaManager->enableTotp($this->user, $secret, $invalidCode);

        $this->assertFalse($result);

        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $this->assertNull($mfa);
    }

    /** @test */
    public function it_generates_recovery_codes_when_enabling_totp()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $recoveryCodes = $mfa->recoveryCodes()->where('used', false)->get();

        $this->assertGreaterThan(0, $recoveryCodes->count());
        $this->assertEquals(config('multi-factor-authentication.backup_codes.count', 10), $recoveryCodes->count());
    }

    /** @test */
    public function it_can_verify_totp_for_user()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $code = $google2fa->getCurrentOtp($secret);
        $result = $this->mfaManager->verifyTotpForUser($this->user, $code);

        $this->assertTrue($result);
    }

    /** @test */
    public function it_can_verify_recovery_code()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $recoveryCode = $mfa->recoveryCodes()->where('used', false)->first();

        // Get the plain code before it was hashed
        // We need to regenerate to get plain codes
        $plainCodes = $this->mfaManager->generateRecoveryCodes($mfa);
        $plainCode = $plainCodes->first();

        $result = $this->mfaManager->verifyRecoveryCode($this->user, $plainCode);

        $this->assertTrue($result);

        // Verify code was marked as used
        $recoveryCode = $mfa->recoveryCodes()->where('code', $plainCode)->first();
        $this->assertNull($recoveryCode); // Code should be hashed, so we check differently

        // Check that one code was used
        $usedCount = $mfa->recoveryCodes()->where('used', true)->count();
        $this->assertEquals(1, $usedCount);
    }

    /** @test */
    public function it_can_verify_either_totp_or_recovery_code()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        // Test TOTP verification
        $totpCode = $google2fa->getCurrentOtp($secret);
        $result = $this->mfaManager->verify($this->user, $totpCode);
        $this->assertTrue($result);

        // Test recovery code verification
        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $plainCodes = $this->mfaManager->generateRecoveryCodes($mfa);
        $recoveryCode = $plainCodes->first();

        $result = $this->mfaManager->verify($this->user, $recoveryCode);
        $this->assertTrue($result);
    }

    /** @test */
    public function it_can_check_if_mfa_is_enabled()
    {
        $this->assertFalse($this->mfaManager->isEnabled($this->user));

        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $this->assertTrue($this->mfaManager->isEnabled($this->user));
    }

    /** @test */
    public function it_can_disable_mfa()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);
        $this->assertTrue($this->mfaManager->isEnabled($this->user));

        $result = $this->mfaManager->disable($this->user);
        $this->assertTrue($result);

        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $this->assertFalse($mfa->enabled);
    }

    /** @test */
    public function it_can_get_remaining_recovery_codes_count()
    {
        $this->assertEquals(0, $this->mfaManager->getRemainingRecoveryCodesCount($this->user));

        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $count = $this->mfaManager->getRemainingRecoveryCodesCount($this->user);
        $this->assertEquals(config('multi-factor-authentication.backup_codes.count', 10), $count);
    }

    /** @test */
    public function it_can_regenerate_recovery_codes()
    {
        $google2fa = new Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);

        $this->mfaManager->enableTotp($this->user, $secret, $verificationCode);

        $mfa = $this->mfaManager->getMfaRecord($this->user);
        $initialCodes = $mfa->recoveryCodes()->where('used', false)->get();

        $newCodes = $this->mfaManager->generateRecoveryCodes($mfa);

        $this->assertCount(config('multi-factor-authentication.backup_codes.count', 10), $newCodes);
        
        // Old codes should be deleted
        $remainingOldCodes = $mfa->recoveryCodes()
            ->whereIn('id', $initialCodes->pluck('id'))
            ->where('used', false)
            ->count();
        $this->assertEquals(0, $remainingOldCodes);
    }
}

