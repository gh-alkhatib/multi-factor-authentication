<?php

namespace MultiFactorAuthentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorDisabledResponse;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorEnabledResponse;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

class TwoFactorAuthenticationController extends Controller
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * The enabled response instance.
     *
     * @var \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorEnabledResponse
     */
    protected $enabledResponse;

    /**
     * The disabled response instance.
     *
     * @var \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorDisabledResponse
     */
    protected $disabledResponse;

    /**
     * Create a new controller instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @param  \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorEnabledResponse  $enabledResponse
     * @param  \MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorDisabledResponse  $disabledResponse
     * @return void
     */
    public function __construct(
        MultiFactorAuthenticationManager $mfaManager,
        TwoFactorEnabledResponse $enabledResponse,
        TwoFactorDisabledResponse $disabledResponse
    ) {
        $this->mfaManager = $mfaManager;
        $this->enabledResponse = $enabledResponse;
        $this->disabledResponse = $disabledResponse;
    }

    /**
     * Enable two factor authentication for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'secret' => 'required|string',
            'code' => 'required|string|size:6',
        ]);

        $user = Auth::user();

        $result = $this->mfaManager->enableTotp($user, $validated['secret'], $validated['code'], true);

        if ($result !== false) {
            $recoveryCodes = $result instanceof \Illuminate\Support\Collection ? $result : collect();

            return $this->enabledResponse->toResponse($request, $recoveryCodes);
        }

        throw ValidationException::withMessages([
            'code' => ['The provided two factor authentication code was invalid.'],
        ]);
    }

    /**
     * Disable two factor authentication for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'password' => 'required|current_password',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->disable($user)) {
            return $this->disabledResponse->toResponse($request);
        }

        if ($request->wantsJson()) {
            return response()->json([
                'message' => 'Failed to disable two factor authentication.',
            ], 500);
        }

        return back()->withErrors(['error' => 'Failed to disable two factor authentication.']);
    }
}

