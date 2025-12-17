<?php

namespace MultiFactorAuthentication\Concerns;

use MultiFactorAuthentication\Models\MultiFactorAuthentication;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

/**
 * @phpstan-ignore-next-line
 * This trait is meant to be used by user models, so it's expected to be unused in this package.
 */
trait HasMultiFactorAuthentication
{
    /**
     * Get the multi-factor authentication records for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function multiFactorAuthentications()
    {
        return $this->morphMany(MultiFactorAuthentication::class, 'authenticatable');
    }

    /**
     * Check if the user has MFA enabled.
     *
     * @param  string  $method
     * @return bool
     */
    public function hasMfaEnabled(string $method = 'totp'): bool
    {
        return app(MultiFactorAuthenticationManager::class)->isEnabled($this, $method);
    }

    /**
     * Get the MFA record for the user.
     *
     * @param  string  $method
     * @return \MultiFactorAuthentication\Models\MultiFactorAuthentication|null
     */
    public function getMfaRecord(string $method = 'totp'): ?MultiFactorAuthentication
    {
        return app(MultiFactorAuthenticationManager::class)->getMfaRecord($this, $method);
    }

    /**
     * Get the remaining recovery codes count.
     *
     * @return int
     */
    public function getRemainingRecoveryCodesCount(): int
    {
        return app(MultiFactorAuthenticationManager::class)->getRemainingRecoveryCodesCount($this);
    }
}

