<?php

namespace MultiFactorAuthentication\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

class RequireMfa
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * Create a new middleware instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */
    public function __construct(MultiFactorAuthenticationManager $mfaManager)
    {
        $this->mfaManager = $mfaManager;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->to('/login');
        }

        // Check if MFA is required globally
        if (config('multi-factor-authentication.required', false)) {
            if (!$this->mfaManager->isEnabled($user)) {
                return redirect()->route('mfa.setup');
            }
        }

        return $next($request);
    }
}

