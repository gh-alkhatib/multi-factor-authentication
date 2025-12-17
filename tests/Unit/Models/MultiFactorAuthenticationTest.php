<?php

namespace MultiFactorAuthentication\Tests\Unit\Models;

use MultiFactorAuthentication\Models\MultiFactorAuthentication;
use MultiFactorAuthentication\Models\RecoveryCode;
use MultiFactorAuthentication\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MultiFactorAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Create a test user model
        $this->user = new class extends \Illuminate\Foundation\Auth\User {
            protected $table = 'users';
            protected $fillable = ['name', 'email', 'password'];
        };
        
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
    public function it_can_create_mfa_record()
    {
        $mfa = MultiFactorAuthentication::create([
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'secret' => 'encrypted-secret',
            'enabled' => true,
            'verified_at' => now(),
        ]);

        $this->assertDatabaseHas('multi_factor_authentications', [
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'enabled' => true,
        ]);
    }

    /** @test */
    public function it_has_authenticatable_relationship()
    {
        $mfa = MultiFactorAuthentication::create([
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'secret' => 'encrypted-secret',
            'enabled' => true,
            'verified_at' => now(),
        ]);

        $authenticatable = $mfa->authenticatable;

        $this->assertNotNull($authenticatable);
        $this->assertEquals($this->user->id, $authenticatable->id);
    }

    /** @test */
    public function it_has_recovery_codes_relationship()
    {
        $mfa = MultiFactorAuthentication::create([
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'secret' => 'encrypted-secret',
            'enabled' => true,
            'verified_at' => now(),
        ]);

        RecoveryCode::create([
            'multi_factor_authentication_id' => $mfa->id,
            'code' => 'test-code-1',
        ]);

        RecoveryCode::create([
            'multi_factor_authentication_id' => $mfa->id,
            'code' => 'test-code-2',
        ]);

        $this->assertCount(2, $mfa->recoveryCodes);
    }

    /** @test */
    public function it_can_check_if_verified()
    {
        $mfa = MultiFactorAuthentication::create([
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'secret' => 'encrypted-secret',
            'enabled' => true,
            'verified_at' => now(),
        ]);

        $this->assertTrue($mfa->isVerified());

        $mfa->verified_at = null;
        $mfa->save();

        $this->assertFalse($mfa->isVerified());
    }

    /** @test */
    public function it_can_check_if_active()
    {
        $mfa = MultiFactorAuthentication::create([
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'secret' => 'encrypted-secret',
            'enabled' => true,
            'verified_at' => now(),
        ]);

        $this->assertTrue($mfa->isActive());

        // Disable
        $mfa->enabled = false;
        $mfa->save();
        $this->assertFalse($mfa->isActive());

        // Enable but not verified
        $mfa->enabled = true;
        $mfa->verified_at = null;
        $mfa->save();
        $this->assertFalse($mfa->isActive());
    }
}

