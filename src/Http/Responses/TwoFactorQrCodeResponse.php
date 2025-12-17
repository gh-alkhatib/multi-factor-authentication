<?php

namespace MultiFactorAuthentication\Http\Responses;

use Illuminate\Http\Request;
use MultiFactorAuthentication\Http\Responses\Contracts\TwoFactorQrCodeResponse as TwoFactorQrCodeResponseContract;
use Symfony\Component\HttpFoundation\Response;

class TwoFactorQrCodeResponse implements TwoFactorQrCodeResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array{secret: string, qr_code_url: string}  $secretData
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse(Request $request, array $secretData): Response
    {
        if ($request->wantsJson()) {
            return response()->json([
                'secret_key' => $secretData['secret'],
                'qr_code_url' => $secretData['qr_code_url'],
            ]);
        }

        return response()->view('multi-factor-authentication::setup', [
            'secret' => $secretData['secret'],
            'qrCodeUrl' => $secretData['qr_code_url'],
        ]);
    }
}

