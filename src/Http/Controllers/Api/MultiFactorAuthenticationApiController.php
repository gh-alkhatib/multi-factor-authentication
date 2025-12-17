<?php

namespace MultiFactorAuthentication\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

/**
 * @deprecated This controller is deprecated. Use the new Fortify-style controllers instead:
 * - TwoFactorAuthenticationController
 * - TwoFactorQrCodeController
 * - TwoFactorRecoveryCodeController
 * - TwoFactorConfirmedController
 * - TwoFactorStatusController
 */
class MultiFactorAuthenticationApiController extends Controller
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * Create a new controller instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */
    public function __construct(MultiFactorAuthenticationManager $mfaManager)
    {
        $this->mfaManager = $mfaManager;
    }

    /**
     * Get MFA status for the authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function status(): JsonResponse
    {
        $user = Auth::user();
        
        $isEnabled = $this->mfaManager->isEnabled($user);
        $remainingCodes = $isEnabled ? $this->mfaManager->getRemainingRecoveryCodesCount($user) : 0;

        return response()->json([
            'two_factor_enabled' => $isEnabled,
            'recovery_codes_count' => $remainingCodes,
        ]);
    }

    /**
     * Get MFA setup data (secret and QR code URL).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSetup(): JsonResponse
    {
        $user = Auth::user();
        
        if ($this->mfaManager->isEnabled($user)) {
            return response()->json([
                'two_factor_enabled' => true,
            ], 400);
        }

        $secretData = $this->mfaManager->generateSecret($user);

        return response()->json([
            'secret_key' => $secretData['secret'],
            'qr_code_url' => $secretData['qr_code_url'],
        ]);
    }

    /**
     * Enable MFA for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function setup(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'secret' => 'required|string',
            'code' => 'required|string|size:6',
        ]);

        $user = Auth::user();

        $result = $this->mfaManager->enableTotp($user, $validated['secret'], $validated['code'], true);

        if ($result !== false) {
            $recoveryCodes = $result instanceof \Illuminate\Support\Collection ? $result : collect();

            return response()->json([
                'two_factor_enabled' => true,
                'recovery_codes' => $recoveryCodes->values()->all(),
            ], 201);
        }

        throw ValidationException::withMessages([
            'code' => ['The provided two factor authentication code was invalid.'],
        ]);
    }

    /**
     * Verify MFA code.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function verify(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'code' => 'required|string',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->verify($user, $validated['code'])) {
            return response()->json([
                'verified' => true,
            ]);
        }

        throw ValidationException::withMessages([
            'code' => ['The provided two factor authentication code was invalid.'],
        ]);
    }

    /**
     * Get recovery codes for the authenticated user.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRecoveryCodes(): JsonResponse
    {
        $user = Auth::user();
        
        if (!$this->mfaManager->isEnabled($user)) {
            return response()->json([
                'two_factor_enabled' => false,
            ], 400);
        }

        $mfa = $this->mfaManager->getMfaRecord($user);
        
        if (!$mfa) {
            return response()->json([
                'two_factor_enabled' => false,
            ], 404);
        }
        
        /** @var \Illuminate\Database\Eloquent\Collection<int, \MultiFactorAuthentication\Models\RecoveryCode> $recoveryCodesCollection */
        $recoveryCodesCollection = $mfa->recoveryCodes()
            ->where('used', false)
            ->get();
            
        $recoveryCodes = $recoveryCodesCollection->map(function ($code) {
            /** @var \MultiFactorAuthentication\Models\RecoveryCode $code */
            return [
                'id' => $code->getAttribute('id'),
                'used' => $code->getAttribute('used'),
                'used_at' => $code->getAttribute('used_at')?->toIso8601String(),
            ];
        });

        return response()->json([
            'recovery_codes' => $recoveryCodes->values()->all(),
        ]);
    }

    /**
     * Regenerate recovery codes.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function regenerateRecoveryCodes(): JsonResponse
    {
        $user = Auth::user();
        $mfa = $this->mfaManager->getMfaRecord($user);

        if (!$mfa) {
            return response()->json([
                'two_factor_enabled' => false,
            ], 400);
        }

        $codes = $this->mfaManager->generateRecoveryCodes($mfa);

        return response()->json([
            'recovery_codes' => $codes->values()->all(),
        ]);
    }

    /**
     * Disable MFA for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function disable(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'password' => 'required|current_password',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->disable($user)) {
            return response()->json([
                'two_factor_enabled' => false,
            ]);
        }

        return response()->json([
            'message' => 'Failed to disable multi-factor authentication.',
        ], 500);
    }
}

