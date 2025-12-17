<?php

namespace MultiFactorAuthentication\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

class TwoFactorStatusController extends Controller
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
     * Get the two factor authentication status for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request): JsonResponse
    {
        $user = Auth::user();
        
        $isEnabled = $this->mfaManager->isEnabled($user);
        $remainingCodes = $isEnabled ? $this->mfaManager->getRemainingRecoveryCodesCount($user) : 0;

        return response()->json([
            'two_factor_enabled' => $isEnabled,
            'recovery_codes_count' => $remainingCodes,
        ]);
    }
}

