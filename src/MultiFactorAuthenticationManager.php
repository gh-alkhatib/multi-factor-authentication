<?php

namespace MultiFactorAuthentication;

use MultiFactorAuthentication\Models\MultiFactorAuthentication;
use MultiFactorAuthentication\Models\RecoveryCode;
use PragmaRX\Google2FA\Google2FA;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MultiFactorAuthenticationManager
{
    /**
     * The Google2FA instance.
     *
     * @var \PragmaRX\Google2FA\Google2FA
     */
    protected $google2fa;

    /**
     * Create a new MFA manager instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->google2fa = new Google2FA();
    }

    /**
     * Generate a new TOTP secret for the user.
     *
     * @param  mixed  $user
     * @return array{secret: string, qr_code_url: string}
     */
    public function generateSecret($user): array
    {
        $secret = $this->google2fa->generateSecretKey();
        $qrCodeUrl = $this->google2fa->getQRCodeUrl(
            config('multi-factor-authentication.totp.issuer'),
            $user->email ?? $user->id,
            $secret
        );

        return [
            'secret' => $secret,
            'qr_code_url' => $qrCodeUrl,
        ];
    }

    /**
     * Enable TOTP for a user.
     *
     * @param  mixed  $user
     * @param  string  $secret
     * @param  string  $verificationCode
     * @param  bool  $returnRecoveryCodes
     * @return bool|\Illuminate\Support\Collection<int, string>
     */
    public function enableTotp($user, string $secret, string $verificationCode, bool $returnRecoveryCodes = false)
    {
        if (!$this->verifyTotp($secret, $verificationCode)) {
            return false;
        }

        $mfa = MultiFactorAuthentication::updateOrCreate(
            [
                'authenticatable_id' => $user->id,
                'authenticatable_type' => get_class($user),
                'method' => 'totp',
            ],
            [
                'secret' => Crypt::encryptString($secret),
                'enabled' => true,
                'verified_at' => now(),
            ]
        );

        // Generate backup codes
        $recoveryCodes = null;
        if (config('multi-factor-authentication.backup_codes.enabled', true)) {
            $recoveryCodes = $this->generateRecoveryCodes($mfa);
        }

        return $returnRecoveryCodes ? ($recoveryCodes ?? collect()) : true;
    }

    /**
     * Verify a TOTP code.
     *
     * @param  string  $secret
     * @param  string  $code
     * @return bool
     */
    public function verifyTotp(string $secret, string $code): bool
    {
        $window = config('multi-factor-authentication.totp.window', 1);
        
        $result = $this->google2fa->verifyKey(
            $secret,
            $code,
            $window
        );
        
        return (bool) $result;
    }

    /**
     * Verify TOTP code for a user.
     *
     * @param  mixed  $user
     * @param  string  $code
     * @return bool
     */
    public function verifyTotpForUser($user, string $code): bool
    {
        $mfa = $this->getMfaRecord($user, 'totp');

        if (!$mfa || !$mfa->isActive()) {
            return false;
        }

        $secret = Crypt::decryptString($mfa->getAttribute('secret'));
        
        return $this->verifyTotp($secret, $code);
    }

    /**
     * Verify a recovery code for a user.
     *
     * @param  mixed  $user
     * @param  string  $code
     * @return bool
     */
    public function verifyRecoveryCode($user, string $code): bool
    {
        $mfa = $this->getMfaRecord($user, 'totp');

        if (!$mfa || !$mfa->isActive()) {
            return false;
        }

        $recoveryCode = $mfa->recoveryCodes()
            ->where('used', false)
            ->get()
            ->first(function ($recoveryCode) use ($code) {
                /** @var \MultiFactorAuthentication\Models\RecoveryCode $recoveryCode */
                return $recoveryCode->matches($code);
            });

        if ($recoveryCode instanceof RecoveryCode) {
            $recoveryCode->markAsUsed();
            return true;
        }

        return false;
    }

    /**
     * Verify MFA code (TOTP or recovery code).
     *
     * @param  mixed  $user
     * @param  string  $code
     * @return bool
     */
    public function verify($user, string $code): bool
    {
        // Try TOTP first
        if ($this->verifyTotpForUser($user, $code)) {
            return true;
        }

        // Try recovery code
        if ($this->verifyRecoveryCode($user, $code)) {
            return true;
        }

        return false;
    }

    /**
     * Generate recovery codes for an MFA record.
     *
     * @param  \MultiFactorAuthentication\Models\MultiFactorAuthentication  $mfa
     * @return \Illuminate\Support\Collection<int, string>
     */
    public function generateRecoveryCodes(MultiFactorAuthentication $mfa): Collection
    {
        // Delete existing unused codes
        $mfa->recoveryCodes()->where('used', false)->delete();

        $count = config('multi-factor-authentication.backup_codes.count', 10);
        $length = config('multi-factor-authentication.backup_codes.length', 8);
        
        $codes = collect();
        $plainCodes = collect();

        for ($i = 0; $i < $count; $i++) {
            $code = strtoupper(Str::random($length));
            $plainCodes->push($code);

            RecoveryCode::create([
                'multi_factor_authentication_id' => $mfa->getAttribute('id'),
                'code' => $code, // Will be hashed via mutator
            ]);
        }

        return $plainCodes;
    }

    /**
     * Disable MFA for a user.
     *
     * @param  mixed  $user
     * @param  string  $method
     * @return bool
     */
    public function disable($user, string $method = 'totp'): bool
    {
        $mfa = $this->getMfaRecord($user, $method);

        if (!$mfa) {
            return false;
        }

        return $mfa->update([
            'enabled' => false,
        ]);
    }

    /**
     * Check if user has MFA enabled.
     *
     * @param  mixed  $user
     * @param  string  $method
     * @return bool
     */
    public function isEnabled($user, string $method = 'totp'): bool
    {
        $mfa = $this->getMfaRecord($user, $method);

        return $mfa && $mfa->isActive();
    }

    /**
     * Get MFA record for user.
     *
     * @param  mixed  $user
     * @param  string  $method
     * @return \MultiFactorAuthentication\Models\MultiFactorAuthentication|null
     */
    public function getMfaRecord($user, string $method = 'totp'): ?MultiFactorAuthentication
    {
        /** @var MultiFactorAuthentication|null $mfa */
        $mfa = MultiFactorAuthentication::where('authenticatable_id', $user->id)
            ->where('authenticatable_type', get_class($user))
            ->where('method', $method)
            ->first();
            
        return $mfa;
    }

    /**
     * Get remaining recovery codes count for user.
     *
     * @param  mixed  $user
     * @return int
     */
    public function getRemainingRecoveryCodesCount($user): int
    {
        $mfa = $this->getMfaRecord($user, 'totp');

        if (!$mfa) {
            return 0;
        }

        return $mfa->recoveryCodes()->where('used', false)->count();
    }
}

