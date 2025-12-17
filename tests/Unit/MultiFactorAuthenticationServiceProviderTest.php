<?php

namespace MultiFactorAuthentication\Tests\Unit;

use MultiFactorAuthentication\MultiFactorAuthenticationManager;
use MultiFactorAuthentication\MultiFactorAuthenticationServiceProvider;
use MultiFactorAuthentication\Tests\TestCase;
use Illuminate\Support\Facades\Config;

class MultiFactorAuthenticationServiceProviderTest extends TestCase
{
    /** @test */
    public function it_registers_mfa_manager_as_singleton()
    {
        $manager1 = app(MultiFactorAuthenticationManager::class);
        $manager2 = app(MultiFactorAuthenticationManager::class);

        $this->assertInstanceOf(MultiFactorAuthenticationManager::class, $manager1);
        $this->assertSame($manager1, $manager2);
    }

    /** @test */
    public function it_merges_configuration()
    {
        $config = config('multi-factor-authentication');

        $this->assertIsArray($config);
        $this->assertArrayHasKey('totp', $config);
        $this->assertArrayHasKey('backup_codes', $config);
        $this->assertArrayHasKey('routes', $config);
    }

    /** @test */
    public function it_can_publish_configuration()
    {
        $provider = new MultiFactorAuthenticationServiceProvider($this->app);

        $this->assertTrue(
            file_exists(__DIR__ . '/../../config/multi-factor-authentication.php')
        );
    }

    /** @test */
    public function it_loads_migrations()
    {
        $migrationPath = __DIR__ . '/../../database/migrations';
        
        $this->assertTrue(is_dir($migrationPath));
        $this->assertFileExists($migrationPath . '/2024_01_01_000001_create_multi_factor_authentications_table.php');
        $this->assertFileExists($migrationPath . '/2024_01_01_000002_create_mfa_recovery_codes_table.php');
    }
}

