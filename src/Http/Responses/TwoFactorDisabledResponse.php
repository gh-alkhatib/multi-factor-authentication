<?php

namespace MultiFactorAuthentication\Http\Responses;

use Illuminate\Http\Request;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorDisabledResponse as TwoFactorDisabledResponseContract;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorDisabledResponse implements TwoFactorDisabledResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse(Request $request): Response
    {
        if ($request->wantsJson()) {
            return response()->json([
                'two_factor_enabled' => false,
            ]);
        }

        return back()->with('status', 'Two factor authentication has been disabled.');
    }
}

