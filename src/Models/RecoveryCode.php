<?php

namespace MultiFactorAuthentication\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Hash;

/**
 * @method static RecoveryCode create(array<string, mixed> $attributes = [])
 */
class RecoveryCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mfa_recovery_codes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'multi_factor_authentication_id',
        'code',
        'used',
        'used_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'used' => 'boolean',
        'used_at' => 'datetime',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the multi-factor authentication that owns this recovery code.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function multiFactorAuthentication(): BelongsTo
    {
        return $this->belongsTo(MultiFactorAuthentication::class);
    }

    /**
     * Hash the code before saving.
     *
     * @param  string  $value
     * @return void
     */
    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = Hash::make($value);
    }

    /**
     * Mark the recovery code as used.
     *
     * @return bool
     */
    public function markAsUsed(): bool
    {
        return $this->update([
            'used' => true,
            'used_at' => now(),
        ]);
    }

    /**
     * Check if the recovery code matches the provided code.
     *
     * @param  string  $code
     * @return bool
     */
    public function matches(string $code): bool
    {
        return Hash::check($code, $this->attributes['code']);
    }
}

