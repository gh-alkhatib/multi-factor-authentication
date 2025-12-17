<?php

namespace MultiFactorAuthentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorConfirmedResponse;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

class TwoFactorConfirmedController extends Controller
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * The confirmed response instance.
     *
     * @var \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorConfirmedResponse
     */
    protected $confirmedResponse;

    /**
     * Create a new controller instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @param  \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorConfirmedResponse  $confirmedResponse
     * @return void
     */
    public function __construct(MultiFactorAuthenticationManager $mfaManager, TwoFactorConfirmedResponse $confirmedResponse)
    {
        $this->mfaManager = $mfaManager;
        $this->confirmedResponse = $confirmedResponse;
    }

    /**
     * Confirm two factor authentication for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->verify($user, $validated['code'])) {
            session(['mfa_verified' => true]);

            return $this->confirmedResponse->toResponse($request);
        }

        throw ValidationException::withMessages([
            'code' => ['The provided two factor authentication code was invalid.'],
        ]);
    }
}

