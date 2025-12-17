<?php

namespace MultiFactorAuthentication\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * @method static \Illuminate\Database\Eloquent\Builder<MultiFactorAuthentication> where(string $column, mixed $operator = null, mixed $value = null)
 * @method static MultiFactorAuthentication|null find(int $id)
 * @method static MultiFactorAuthentication updateOrCreate(array<string, mixed> $attributes, array<string, mixed> $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<MultiFactorAuthentication> where(string $column, mixed $operator = null, mixed $value = null)
 * @method static \Illuminate\Database\Eloquent\Builder<MultiFactorAuthentication> where(string $column, mixed $value)
 * @method static MultiFactorAuthentication|null first()
 */
class MultiFactorAuthentication extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'multi_factor_authentications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'authenticatable_id',
        'authenticatable_type',
        'method',
        'secret',
        'enabled',
        'verified_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'enabled' => 'boolean',
        'verified_at' => 'datetime',
    ];

    /**
     * Get the parent authenticatable model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function authenticatable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the recovery codes for this MFA method.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recoveryCodes(): HasMany
    {
        return $this->hasMany(RecoveryCode::class, 'multi_factor_authentication_id');
    }

    /**
     * Check if MFA is verified.
     *
     * @return bool
     */
    public function isVerified(): bool
    {
        return !is_null($this->getAttribute('verified_at'));
    }

    /**
     * Check if MFA is enabled and verified.
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->getAttribute('enabled') && $this->isVerified();
    }
}

