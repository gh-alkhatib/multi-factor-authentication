<?php

use Illuminate\Support\Facades\Route;
use MultiFactorAuthentication\Http\Controllers\TwoFactorAuthenticationController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorConfirmedController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorQrCodeController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorRecoveryCodeController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorStatusController;

Route::middleware(['api', 'auth:sanctum'])->group(function () {
    // Two factor authentication status
    Route::get('/two-factor-authentication', [TwoFactorStatusController::class, 'show'])
        ->name('two-factor.status');
    
    // Get QR code for setup
    Route::get('/two-factor-authentication/qr-code', [TwoFactorQrCodeController::class, 'show'])
        ->name('two-factor.qr-code');
    
    // Enable two factor authentication
    Route::post('/two-factor-authentication', [TwoFactorAuthenticationController::class, 'store'])
        ->name('two-factor.enable');
    
    // Disable two factor authentication
    Route::delete('/two-factor-authentication', [TwoFactorAuthenticationController::class, 'destroy'])
        ->name('two-factor.disable');

    // Confirm two factor authentication
    Route::post('/two-factor-confirmed', [TwoFactorConfirmedController::class, 'store'])
        ->name('two-factor.confirm');

    // Recovery codes
    Route::get('/two-factor-recovery-codes', [TwoFactorRecoveryCodeController::class, 'index'])
        ->name('two-factor.recovery-codes');
    
    Route::post('/two-factor-recovery-codes', [TwoFactorRecoveryCodeController::class, 'store'])
        ->name('two-factor.recovery-codes.store');

    // Legacy routes for backward compatibility
    Route::get('/status', [TwoFactorStatusController::class, 'show'])
        ->name('api.mfa.status');

    Route::get('/setup', [TwoFactorQrCodeController::class, 'show'])
        ->name('api.mfa.setup');
    
    Route::post('/setup', [TwoFactorAuthenticationController::class, 'store'])
        ->name('api.mfa.setup.store');

    Route::post('/verify', [TwoFactorConfirmedController::class, 'store'])
        ->name('api.mfa.verify');

    Route::get('/recovery-codes', [TwoFactorRecoveryCodeController::class, 'index'])
        ->name('api.mfa.recovery-codes');
    
    Route::post('/recovery-codes/regenerate', [TwoFactorRecoveryCodeController::class, 'store'])
        ->name('api.mfa.recovery-codes.regenerate');

    Route::post('/disable', [TwoFactorAuthenticationController::class, 'destroy'])
        ->name('api.mfa.disable');
});

