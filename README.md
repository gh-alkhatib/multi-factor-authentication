# Multi-Factor Authentication Package for Laravel

A comprehensive multi-factor authentication (MFA) package for Laravel applications, providing TOTP (Time-based One-Time Password) support with backup recovery codes.

## Features

- ✅ TOTP (Time-based One-Time Password) support
- ✅ QR code generation for authenticator apps
- ✅ Backup/recovery codes
- ✅ Multiple MFA methods support
- ✅ Middleware for requiring MFA
- ✅ RESTful API endpoints
- ✅ Easy integration with Laravel applications
- ✅ Configurable settings
- ✅ Database migrations included

## Installation

### Step 1: Install via Composer

```bash
composer require your-vendor/multi-factor-authentication
```

### Step 2: Publish Configuration and Migrations

```bash
php artisan vendor:publish --tag=mfa-config
php artisan vendor:publish --tag=mfa-migrations
```

### Step 3: Run Migrations

```bash
php artisan migrate
```

## Configuration

After publishing the configuration file, you can customize the settings in `config/multi-factor-authentication.php`:

- **TOTP Settings**: Issuer name, algorithm, digits, period, and window
- **Backup Codes**: Enable/disable, count, and length
- **Web Routes**: Prefix, middleware, and enable/disable web routes
- **API Routes**: Prefix, middleware, and enable/disable API routes
- **User Model**: Specify your user model
- **Table Names**: Customize database table names

## Usage

### Add Trait to User Model (Optional but Recommended)

Add the `HasMultiFactorAuthentication` trait to your User model for easier access:

```php
use MultiFactorAuthentication\Concerns\HasMultiFactorAuthentication;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasMultiFactorAuthentication;

    // ... rest of your model
}
```

This provides convenient methods:

- `$user->hasMfaEnabled()` - Check if MFA is enabled
- `$user->getMfaRecord()` - Get MFA record
- `$user->getRemainingRecoveryCodesCount()` - Get remaining recovery codes count
- `$user->multiFactorAuthentications` - Relationship to MFA records

### Basic Setup

1. **Generate Secret and QR Code**

```php
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

$mfaManager = app(MultiFactorAuthenticationManager::class);
$secretData = $mfaManager->generateSecret($user);

// $secretData contains:
// - 'secret': The TOTP secret key
// - 'qr_code_url': URL for QR code generation
```

2. **Enable TOTP for User**

```php
$mfaManager->enableTotp($user, $secret, $verificationCode);
```

3. **Verify TOTP Code**

```php
// Verify TOTP code
if ($mfaManager->verifyTotpForUser($user, $code)) {
    // Code is valid
}

// Or verify recovery code
if ($mfaManager->verifyRecoveryCode($user, $code)) {
    // Recovery code is valid
}

// Or verify either TOTP or recovery code
if ($mfaManager->verify($user, $code)) {
    // Either code type is valid
}
```

4. **Check if MFA is Enabled**

```php
if ($mfaManager->isEnabled($user)) {
    // MFA is enabled and verified
}
```

5. **Disable MFA**

```php
$mfaManager->disable($user);
```

### Using Middleware

Add the `RequireMfa` middleware to routes that require MFA:

```php
use MultiFactorAuthentication\Middleware\RequireMfa;

Route::middleware([RequireMfa::class])->group(function () {
    // Protected routes
});
```

Or add it to your `app/Http/Kernel.php`:

```php
protected $middlewareAliases = [
    'require.mfa' => \MultiFactorAuthentication\Middleware\RequireMfa::class,
];
```

Then use it:

```php
Route::middleware(['auth', 'require.mfa'])->group(function () {
    // Protected routes
});
```

### Using Web Routes

The package includes default web routes (if enabled in config):

- `GET /mfa/setup` - Show MFA setup page
- `POST /mfa/setup` - Store MFA setup
- `GET /mfa/verify` - Show MFA verification page
- `POST /mfa/verify` - Verify MFA code
- `GET /mfa/recovery-codes` - Show recovery codes
- `POST /mfa/recovery-codes/regenerate` - Regenerate recovery codes
- `POST /mfa/disable` - Disable MFA

### Views

You'll need to create views for the MFA functionality. Publish the views (if provided) or create your own:

- `multi-factor-authentication::setup` - Setup page with QR code
- `multi-factor-authentication::verify` - Verification page
- `multi-factor-authentication::recovery-codes` - Recovery codes display

## API Documentation

The package provides a complete RESTful API for multi-factor authentication. All API endpoints require authentication via Laravel Sanctum (or your configured API guard).

### Base URL

All API endpoints are prefixed with `/api/mfa` by default (configurable in `config/multi-factor-authentication.php`).

### Authentication

All API endpoints require authentication. The default middleware is `auth:sanctum`, but you can configure this in the config file.

### Endpoints

#### Get MFA Status

Get the current MFA status for the authenticated user.

**Endpoint:** `GET /api/mfa/status`

**Response:**

```json
{
  "two_factor_enabled": true,
  "recovery_codes_count": 8
}
```

#### Get Setup Data

Get the secret and QR code URL for setting up MFA.

**Endpoint:** `GET /api/mfa/setup`

**Response:**

```json
{
  "secret": "JBSWY3DPEHPK3PXP",
  "qr_code_url": "otpauth://totp/Laravel:user@example.com?secret=JBSWY3DPEHPK3PXP&issuer=Laravel",
  "manual_entry_key": "JBSWY3DPEHPK3PXP"
}
```

**Error Response (if already enabled):**

```json
{
  "message": "Multi-factor authentication is already enabled.",
  "enabled": true
}
```

Status: `400 Bad Request`

#### Enable MFA

Enable multi-factor authentication for the authenticated user.

**Endpoint:** `POST /api/mfa/setup`

**Request Body:**

```json
{
  "secret": "JBSWY3DPEHPK3PXP",
  "code": "123456"
}
```

**Response:**

```json
{
    "message": "Multi-factor authentication has been enabled successfully.",
    "enabled": true,
    "recovery_codes": [
        "ABC12345",
        "DEF67890",
        ...
    ]
}
```

Status: `201 Created`

**Error Response:**

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "code": ["Invalid verification code. Please try again."]
  }
}
```

Status: `422 Unprocessable Entity`

#### Verify MFA Code

Verify a TOTP code or recovery code.

**Endpoint:** `POST /api/mfa/verify`

**Request Body:**

```json
{
  "code": "123456"
}
```

**Response:**

```json
{
  "message": "Multi-factor authentication verified successfully.",
  "verified": true
}
```

**Error Response:**

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "code": ["Invalid verification code. Please try again."]
  }
}
```

Status: `422 Unprocessable Entity`

#### Get Recovery Codes

Get the list of unused recovery codes for the authenticated user.

**Endpoint:** `GET /api/mfa/recovery-codes`

**Response:**

```json
{
  "recovery_codes": [
    {
      "id": 1,
      "used": false,
      "used_at": null
    },
    {
      "id": 2,
      "used": false,
      "used_at": null
    }
  ],
  "remaining_count": 2
}
```

**Error Response:**

```json
{
  "message": "Multi-factor authentication is not enabled.",
  "enabled": false
}
```

Status: `400 Bad Request`

#### Regenerate Recovery Codes

Generate new recovery codes and invalidate old ones.

**Endpoint:** `POST /api/mfa/recovery-codes/regenerate`

**Response:**

```json
{
    "message": "Recovery codes have been regenerated successfully.",
    "recovery_codes": [
        "NEW12345",
        "NEW67890",
        ...
    ],
    "count": 10
}
```

**Error Response:**

```json
{
  "message": "Multi-factor authentication is not enabled.",
  "enabled": false
}
```

Status: `400 Bad Request`

#### Disable MFA

Disable multi-factor authentication for the authenticated user.

**Endpoint:** `POST /api/mfa/disable`

**Request Body:**

```json
{
  "password": "user-password"
}
```

**Response:**

```json
{
  "message": "Multi-factor authentication has been disabled successfully.",
  "enabled": false
}
```

**Error Response:**

```json
{
  "message": "The given data was invalid.",
  "errors": {
    "password": ["The provided password is incorrect."]
  }
}
```

Status: `422 Unprocessable Entity`

### API Usage Example

Here's an example using cURL:

```bash
# Get MFA status
curl -X GET https://your-app.com/api/mfa/status \
  -H "Authorization: Bearer YOUR_ACCESS_TOKEN" \
  -H "Accept: application/json"

# Get setup data
curl -X GET https://your-app.com/api/mfa/setup \
  -H "Authorization: Bearer YOUR_ACCESS_TOKEN" \
  -H "Accept: application/json"

# Enable MFA
curl -X POST https://your-app.com/api/mfa/setup \
  -H "Authorization: Bearer YOUR_ACCESS_TOKEN" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "secret": "JBSWY3DPEHPK3PXP",
    "code": "123456"
  }'

# Verify code
curl -X POST https://your-app.com/api/mfa/verify \
  -H "Authorization: Bearer YOUR_ACCESS_TOKEN" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "code": "123456"
  }'
```

### API Configuration

You can configure API routes in `config/multi-factor-authentication.php`:

```php
'api_routes' => [
    'enabled' => true,
    'prefix' => 'api/mfa',
    'middleware' => ['api', 'auth:sanctum'],
],
```

To disable API routes, set `enabled` to `false`:

```php
'api_routes' => [
    'enabled' => false,
],
```

## API Reference

### MultiFactorAuthenticationManager

#### Methods

- `generateSecret($user)`: Generate TOTP secret and QR code URL
- `enableTotp($user, $secret, $verificationCode)`: Enable TOTP for user
- `verifyTotp($secret, $code)`: Verify TOTP code with secret
- `verifyTotpForUser($user, $code)`: Verify TOTP code for user
- `verifyRecoveryCode($user, $code)`: Verify recovery code for user
- `verify($user, $code)`: Verify either TOTP or recovery code
- `generateRecoveryCodes($mfa)`: Generate recovery codes for MFA record
- `disable($user, $method = 'totp')`: Disable MFA for user
- `isEnabled($user, $method = 'totp')`: Check if MFA is enabled
- `getMfaRecord($user, $method = 'totp')`: Get MFA record for user
- `getRemainingRecoveryCodesCount($user)`: Get count of remaining recovery codes

## Security Considerations

- Secrets are encrypted using Laravel's `Crypt` facade
- Recovery codes are hashed before storage
- TOTP verification includes clock skew tolerance
- All sensitive operations require authentication

## Requirements

- PHP >= 8.1
- Laravel >= 10.0
- Google2FA library (automatically installed)

## License

MIT License

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Support

For issues and questions, please open an issue on GitHub.
