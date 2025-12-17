<?php

namespace MultiFactorAuthentication;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class MultiFactorAuthenticationServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge package configuration
        $this->mergeConfigFrom(
            __DIR__ . '/../config/multi-factor-authentication.php',
            'multi-factor-authentication'
        );

        // Register the MFA manager as a singleton
        $this->app->singleton(MultiFactorAuthenticationManager::class, function () {
            return new MultiFactorAuthenticationManager();
        });

        // Register response classes (can be customized by binding custom implementations)
        $this->app->singleton(
            \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorEnabledResponse::class,
            \MultiFactorAuthentication\Http\Responses\TwoFactorEnabledResponse::class
        );

        $this->app->singleton(
            \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorDisabledResponse::class,
            \MultiFactorAuthentication\Http\Responses\TwoFactorDisabledResponse::class
        );

        $this->app->singleton(
            \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorQrCodeResponse::class,
            \MultiFactorAuthentication\Http\Responses\TwoFactorQrCodeResponse::class
        );

        $this->app->singleton(
            \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorConfirmedResponse::class,
            \MultiFactorAuthentication\Http\Responses\TwoFactorConfirmedResponse::class
        );

        $this->app->singleton(
            \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorRecoveryCodesResponse::class,
            \MultiFactorAuthentication\Http\Responses\TwoFactorRecoveryCodesResponse::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__ . '/../config/multi-factor-authentication.php' => config_path('multi-factor-authentication.php'),
        ], 'mfa-config');

        // Publish migrations
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'mfa-migrations');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Load web routes if enabled
        if (config('multi-factor-authentication.routes.enabled', true)) {
            $this->loadWebRoutes();
        }

        // Load API routes if enabled
        if (config('multi-factor-authentication.api_routes.enabled', true)) {
            $this->loadApiRoutes();
        }
    }

    /**
     * Load package web routes.
     *
     * @return void
     */
    protected function loadWebRoutes()
    {
        Route::group([
            'prefix' => config('multi-factor-authentication.routes.prefix', 'mfa'),
            'middleware' => config('multi-factor-authentication.routes.middleware', ['web']),
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        });
    }

    /**
     * Load package API routes.
     *
     * @return void
     */
    protected function loadApiRoutes()
    {
        Route::group([
            'prefix' => config('multi-factor-authentication.api_routes.prefix', 'api/mfa'),
            'middleware' => config('multi-factor-authentication.api_routes.middleware', ['api', 'auth:sanctum']),
        ], function () {
            $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        });
    }
}

