<?php

namespace MultiFactorAuthentication\Http\Responses;

use Illuminate\Http\Request;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorEnabledResponse as TwoFactorEnabledResponseContract;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorEnabledResponse implements TwoFactorEnabledResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Support\Collection<int, string>  $recoveryCodes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse(Request $request, $recoveryCodes): Response
    {
        if ($request->wantsJson()) {
            return response()->json([
                'two_factor_enabled' => true,
                'recovery_codes' => $recoveryCodes->values()->all(),
            ], 201);
        }

        return redirect()->route('mfa.recovery-codes')
            ->with('recovery_codes', $recoveryCodes);
    }
}

