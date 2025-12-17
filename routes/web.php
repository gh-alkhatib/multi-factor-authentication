<?php

use Illuminate\Support\Facades\Route;
use MultiFactorAuthentication\Http\Controllers\TwoFactorAuthenticationController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorConfirmedController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorQrCodeController;
use MultiFactorAuthentication\Http\Controllers\TwoFactorRecoveryCodeController;

Route::middleware(['auth'])->group(function () {
    // Two factor authentication status
    Route::get('/two-factor-authentication', [TwoFactorQrCodeController::class, 'show'])
        ->name('two-factor.login');
    
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
    Route::get('/setup', [TwoFactorQrCodeController::class, 'show'])
        ->name('mfa.setup');
    
    Route::post('/setup', [TwoFactorAuthenticationController::class, 'store'])
        ->name('mfa.setup.store');

    Route::get('/verify', function () {
        return view('multi-factor-authentication::verify');
    })->name('mfa.verify');
    
    Route::post('/verify', [TwoFactorConfirmedController::class, 'store'])
        ->name('mfa.verify.store');

    Route::get('/recovery-codes', [TwoFactorRecoveryCodeController::class, 'index'])
        ->name('mfa.recovery-codes');
    
    Route::post('/recovery-codes/regenerate', [TwoFactorRecoveryCodeController::class, 'store'])
        ->name('mfa.recovery-codes.regenerate');

    Route::post('/disable', [TwoFactorAuthenticationController::class, 'destroy'])
        ->name('mfa.disable');
});

