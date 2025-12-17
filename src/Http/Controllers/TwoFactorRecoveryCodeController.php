<?php

namespace MultiFactorAuthentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorRecoveryCodesResponse;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

class TwoFactorRecoveryCodeController extends Controller
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * The recovery codes response instance.
     *
     * @var \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorRecoveryCodesResponse
     */
    protected $recoveryCodesResponse;

    /**
     * Create a new controller instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @param  \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorRecoveryCodesResponse  $recoveryCodesResponse
     * @return void
     */
    public function __construct(MultiFactorAuthenticationManager $mfaManager, TwoFactorRecoveryCodesResponse $recoveryCodesResponse)
    {
        $this->mfaManager = $mfaManager;
        $this->recoveryCodesResponse = $recoveryCodesResponse;
    }

    /**
     * Get the recovery codes for the authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response|\Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        
        if (!$this->mfaManager->isEnabled($user)) {
            if ($request->wantsJson()) {
                return response()->json([
                    'two_factor_enabled' => false,
                ], 400);
            }

            return redirect()->route('mfa.setup');
        }

        $mfa = $this->mfaManager->getMfaRecord($user);
        
        if (!$mfa) {
            if ($request->wantsJson()) {
                return response()->json([
                    'two_factor_enabled' => false,
                ], 404);
            }

            return redirect()->route('mfa.setup');
        }
        
        /** @var \Illuminate\Database\Eloquent\Collection<int, \MultiFactorAuthentication\Models\RecoveryCode> $recoveryCodesCollection */
        $recoveryCodesCollection = $mfa->recoveryCodes()
            ->where('used', false)
            ->get();
            
        if ($request->wantsJson()) {
            $recoveryCodes = $recoveryCodesCollection->map(function ($code) {
                /** @var \MultiFactorAuthentication\Models\RecoveryCode $code */
                return [
                    'id' => $code->getAttribute('id'),
                    'used' => $code->getAttribute('used'),
                    'used_at' => $code->getAttribute('used_at')?->toIso8601String(),
                ];
            });

            return $this->recoveryCodesResponse->toResponse($request, $recoveryCodes->values()->all());
        }

        return view('multi-factor-authentication::recovery-codes', [
            'recoveryCodes' => $recoveryCodesCollection,
        ]);
    }

    /**
     * Generate new recovery codes for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $mfa = $this->mfaManager->getMfaRecord($user);

        if (!$mfa) {
            if ($request->wantsJson()) {
                return response()->json([
                    'two_factor_enabled' => false,
                ], 400);
            }

            return redirect()->route('mfa.setup');
        }

        $codes = $this->mfaManager->generateRecoveryCodes($mfa);

        return $this->recoveryCodesResponse->toResponse($request, $codes);
    }
}

