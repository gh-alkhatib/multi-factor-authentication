<?php

namespace MultiFactorAuthentication\Http\Responses;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorRecoveryCodesResponse as TwoFactorRecoveryCodesResponseContract;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorRecoveryCodesResponse implements TwoFactorRecoveryCodesResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Support\Collection<int, string>|array<int, string>|array<int, array<string, mixed>>  $recoveryCodes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse(Request $request, $recoveryCodes): Response
    {
        if ($request->wantsJson()) {
            $codes = $recoveryCodes instanceof Collection 
                ? $recoveryCodes->values()->all() 
                : $recoveryCodes;

            return response()->json([
                'recovery_codes' => $codes,
            ]);
        }

        if ($recoveryCodes instanceof Collection) {
            return redirect()->route('mfa.recovery-codes')
                ->with('recovery_codes', $recoveryCodes)
                ->with('status', 'Recovery codes have been regenerated.');
        }

        return redirect()->route('mfa.recovery-codes');
    }
}

