<?php

namespace MultiFactorAuthentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorQrCodeResponse;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

class TwoFactorQrCodeController extends Controller
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * The QR code response instance.
     *
     * @var \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorQrCodeResponse
     */
    protected $qrCodeResponse;

    /**
     * Create a new controller instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @param  \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorQrCodeResponse  $qrCodeResponse
     * @return void
     */
    public function __construct(MultiFactorAuthenticationManager $mfaManager, TwoFactorQrCodeResponse $qrCodeResponse)
    {
        $this->mfaManager = $mfaManager;
        $this->qrCodeResponse = $qrCodeResponse;
    }

    /**
     * Get the QR code for the user's two factor authentication.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Request $request)
    {
        $user = Auth::user();
        
        if ($this->mfaManager->isEnabled($user)) {
            if ($request->wantsJson()) {
                return response()->json([
                    'two_factor_enabled' => true,
                ], 400);
            }

            return redirect()->route('mfa.recovery-codes');
        }

        $secretData = $this->mfaManager->generateSecret($user);

        return $this->qrCodeResponse->toResponse($request, $secretData);
    }
}

