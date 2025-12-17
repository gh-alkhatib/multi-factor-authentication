<?php

namespace MultiFactorAuthentication\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use MultiFactorAuthentication\MultiFactorAuthenticationServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    use RefreshDatabase;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Set up database
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            MultiFactorAuthenticationServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function defineEnvironment($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        // Set app key (32 characters for AES-256-CBC)
        $app['config']->set('app.key', 'base64:' . base64_encode('12345678901234567890123456789012'));

        // Set encryption cipher
        $app['config']->set('app.cipher', 'AES-256-CBC');

        // Merge package config
        $app['config']->set('multi-factor-authentication', require __DIR__ . '/../config/multi-factor-authentication.php');
    }
}

