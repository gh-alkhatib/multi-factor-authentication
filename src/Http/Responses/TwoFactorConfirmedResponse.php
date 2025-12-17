<?php

namespace MultiFactorAuthentication\Http\Responses;

use Illuminate\Http\Request;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorConfirmedResponse as TwoFactorConfirmedResponseContract;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorConfirmedResponse implements TwoFactorConfirmedResponseContract
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
                'verified' => true,
            ]);
        }

        return redirect()->intended('/')
            ->with('status', 'Two factor authentication verified successfully.');
    }
}

