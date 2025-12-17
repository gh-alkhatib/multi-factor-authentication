<?php

namespace MultiFactorAuthentication\Tests\Feature\Middleware;

use MultiFactorAuthentication\Middleware\RequireMfa;
use MultiFactorAuthentication\Models\MultiFactorAuthentication;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;
use MultiFactorAuthentication\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

class RequireMfaTest extends TestCase
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

        // Set up a test route
        Route::middleware([RequireMfa::class])->get('/test-protected', function () {
            return 'protected';
        });
    }

    /** @test */
    public function it_redirects_unauthenticated_users()
    {
        $response = $this->get('/test-protected');

        $response->assertRedirect('/login');
        $this->assertEquals(302, $response->status());
    }

    /** @test */
    public function it_allows_access_when_mfa_not_required()
    {
        Config::set('multi-factor-authentication.required', false);
        
        Auth::login($this->user);

        $response = $this->get('/test-protected');

        $response->assertStatus(200);
        $response->assertSee('protected');
    }

    /** @test */
    public function it_redirects_to_setup_when_mfa_required_but_not_enabled()
    {
        Config::set('multi-factor-authentication.required', true);
        Config::set('multi-factor-authentication.routes.prefix', 'mfa');
        
        Auth::login($this->user);

        $response = $this->get('/test-protected');

        // Should redirect to mfa setup route
        $response->assertRedirect('/mfa/setup');
    }

    /** @test */
    public function it_allows_access_when_mfa_required_and_enabled()
    {
        Config::set('multi-factor-authentication.required', true);
        
        Auth::login($this->user);

        // Enable MFA
        $google2fa = new \PragmaRX\Google2FA\Google2FA();
        $secret = $google2fa->generateSecretKey();
        $verificationCode = $google2fa->getCurrentOtp($secret);
        
        app(MultiFactorAuthenticationManager::class)->enableTotp($this->user, $secret, $verificationCode);

        $response = $this->get('/test-protected');

        $response->assertStatus(200);
        $response->assertSee('protected');
    }
}

