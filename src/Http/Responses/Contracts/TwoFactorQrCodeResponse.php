<?php

namespace MultiFactorAuthentication\Http\Responses\Contracts;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

interface TwoFactorQrCodeResponse
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array{secret: string, qr_code_url: string}  $secretData
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse(Request $request, array $secretData): Response;
}

