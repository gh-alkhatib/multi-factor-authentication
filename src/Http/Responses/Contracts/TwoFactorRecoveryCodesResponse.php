<?php

namespace MultiFactorAuthentication\Http\Responses\Contracts;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

interface TwoFactorRecoveryCodesResponse
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Support\Collection<int, string>|array<int, string>|array<int, array<string, mixed>>  $recoveryCodes
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse(Request $request, $recoveryCodes): Response;
}

