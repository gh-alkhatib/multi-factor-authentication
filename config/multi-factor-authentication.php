<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Multi-Factor Authentication Configuration
    |--------------------------------------------------------------------------
    |
    | This file contains the configuration options for the Multi-Factor
    | Authentication package.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | TOTP Configuration
    |--------------------------------------------------------------------------
    |
    | Time-based One-Time Password (TOTP) settings for authenticator apps.
    |
    */
    'totp' => [
        'issuer' => env('APP_NAME', 'Laravel'),
        'algorithm' => 'sha1',
        'digits' => 6,
        'period' => 30, // seconds
        'window' => 1, // tolerance for clock skew
    ],

    /*
    |--------------------------------------------------------------------------
    | Backup Codes Configuration
    |--------------------------------------------------------------------------
    |
    | Settings for backup/recovery codes.
    |
    */
    'backup_codes' => [
        'enabled' => true,
        'count' => 10,
        'length' => 8,
    ],

    /*
    |--------------------------------------------------------------------------
    | Web Routes Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for package web routes.
    |
    */
    'routes' => [
        'enabled' => true,
        'prefix' => 'mfa',
        'middleware' => ['web', 'auth'],
    ],

    /*
    |--------------------------------------------------------------------------
    | API Routes Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for package API routes.
    |
    */
    'api_routes' => [
        'enabled' => true,
        'prefix' => 'api/mfa',
        'middleware' => ['api', 'auth:sanctum'],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | The user model that will be used for MFA.
    | Defaults to Laravel's configured user model.
    |
    */
    // @phpstan-ignore-next-line
    'user_model' => config('auth.providers.users.model', \App\Models\User::class),

    /*
    |--------------------------------------------------------------------------
    | MFA Table Name
    |--------------------------------------------------------------------------
    |
    | The database table name for storing MFA records.
    |
    */
    'table_name' => 'multi_factor_authentications',

    /*
    |--------------------------------------------------------------------------
    | Recovery Codes Table Name
    |--------------------------------------------------------------------------
    |
    | The database table name for storing recovery codes.
    |
    */
    'recovery_codes_table' => 'mfa_recovery_codes',

    /*
    |--------------------------------------------------------------------------
    | Require MFA
    |--------------------------------------------------------------------------
    |
    | Whether MFA is required for all authenticated users.
    |
    */
    'required' => env('MFA_REQUIRED', false),

    /*
    |--------------------------------------------------------------------------
    | MFA Methods
    |--------------------------------------------------------------------------
    |
    | Available MFA methods. Users can enable multiple methods.
    |
    */
    'methods' => [
        'totp' => true,
        'backup_codes' => true,
    ],
];

