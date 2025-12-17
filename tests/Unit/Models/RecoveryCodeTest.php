<?php

namespace MultiFactorAuthentication\Tests\Unit\Models;

use MultiFactorAuthentication\Models\MultiFactorAuthentication;
use MultiFactorAuthentication\Models\RecoveryCode;
use MultiFactorAuthentication\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class RecoveryCodeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $user;

    /**
     * @var \MultiFactorAuthentication\Models\MultiFactorAuthentication
     */
    protected $mfa;

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

        $this->mfa = MultiFactorAuthentication::create([
            'authenticatable_id' => $this->user->id,
            'authenticatable_type' => get_class($this->user),
            'method' => 'totp',
            'secret' => 'encrypted-secret',
            'enabled' => true,
            'verified_at' => now(),
        ]);
    }

    /** @test */
    public function it_hashes_code_before_saving()
    {
        $plainCode = 'TEST1234';
        $recoveryCode = RecoveryCode::create([
            'multi_factor_authentication_id' => $this->mfa->id,
            'code' => $plainCode,
        ]);

        // Code should be hashed
        $this->assertNotEquals($plainCode, $recoveryCode->getAttributes()['code']);
        $this->assertTrue(Hash::check($plainCode, $recoveryCode->getAttributes()['code']));
    }

    /** @test */
    public function it_can_match_a_code()
    {
        $plainCode = 'TEST1234';
        $recoveryCode = RecoveryCode::create([
            'multi_factor_authentication_id' => $this->mfa->id,
            'code' => $plainCode,
        ]);

        $this->assertTrue($recoveryCode->matches($plainCode));
        $this->assertFalse($recoveryCode->matches('WRONG123'));
    }

    /** @test */
    public function it_can_mark_as_used()
    {
        $recoveryCode = RecoveryCode::create([
            'multi_factor_authentication_id' => $this->mfa->id,
            'code' => 'TEST1234',
            'used' => false,
        ]);

        $this->assertFalse($recoveryCode->used);
        $this->assertNull($recoveryCode->used_at);

        $result = $recoveryCode->markAsUsed();

        $this->assertTrue($result);
        $recoveryCode->refresh();
        $this->assertTrue($recoveryCode->used);
        $this->assertNotNull($recoveryCode->used_at);
    }

    /** @test */
    public function it_has_mfa_relationship()
    {
        $recoveryCode = RecoveryCode::create([
            'multi_factor_authentication_id' => $this->mfa->id,
            'code' => 'TEST1234',
        ]);

        $mfa = $recoveryCode->multiFactorAuthentication;

        $this->assertNotNull($mfa);
        $this->assertEquals($this->mfa->id, $mfa->id);
    }
}

