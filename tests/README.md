# Test Suite

This package includes a comprehensive test suite using PHPUnit and Orchestra Testbench.

## Running Tests

```bash
# Run all tests
./vendor/bin/phpunit

# Run specific test suite
./vendor/bin/phpunit --testsuite Unit
./vendor/bin/phpunit --testsuite Feature

# Run specific test class
./vendor/bin/phpunit tests/Unit/MultiFactorAuthenticationManagerTest.php

# Run with coverage
./vendor/bin/phpunit --coverage-html coverage
```

## Test Coverage

### Unit Tests

#### MultiFactorAuthenticationManagerTest
- ✅ Generate TOTP secret and QR code
- ✅ Verify TOTP codes
- ✅ Reject invalid TOTP codes
- ✅ Enable TOTP for users
- ✅ Fail to enable with invalid code
- ✅ Generate recovery codes when enabling TOTP
- ✅ Verify TOTP for user
- ✅ Verify recovery codes
- ✅ Verify either TOTP or recovery code
- ✅ Check if MFA is enabled
- ✅ Disable MFA
- ✅ Get remaining recovery codes count
- ✅ Regenerate recovery codes

#### MultiFactorAuthenticationTest (Model)
- ✅ Create MFA record
- ✅ Authenticatable relationship
- ✅ Recovery codes relationship
- ✅ Check if verified
- ✅ Check if active

#### RecoveryCodeTest (Model)
- ✅ Hash code before saving
- ✅ Match a code
- ✅ Mark as used
- ✅ MFA relationship

#### MultiFactorAuthenticationServiceProviderTest
- ✅ Register MFA manager as singleton
- ✅ Merge configuration
- ✅ Publish configuration
- ✅ Load migrations

### Feature Tests

#### RequireMfaTest (Middleware)
- ✅ Redirect unauthenticated users
- ✅ Allow access when MFA not required
- ✅ Redirect to setup when MFA required but not enabled
- ✅ Allow access when MFA required and enabled

## Test Results

**Current Status**: ✅ All 30 tests passing (69 assertions)

```
Tests: 30, Assertions: 69, Errors: 0, Failures: 0
```

## Test Environment

- **PHP**: 8.1+
- **Laravel**: 10.0+ / 11.0+
- **Database**: SQLite in-memory for testing
- **Test Framework**: PHPUnit 10.x
- **Laravel Testing**: Orchestra Testbench

## Writing New Tests

When adding new features, ensure you:

1. Write tests for new functionality
2. Follow the existing test structure
3. Use descriptive test method names (`it_can_...`, `it_should_...`)
4. Test both success and failure scenarios
5. Test edge cases and error conditions

