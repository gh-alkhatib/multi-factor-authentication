<?php

namespace MultiFactorAuthentication\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use MultiFactorAuthentication\MultiFactorAuthenticationManager;

/**
 * @deprecated This controller is deprecated. Use the new Fortify-style controllers instead:
 * - TwoFactorAuthenticationController
 * - TwoFactorQrCodeController
 * - TwoFactorRecoveryCodeController
 * - TwoFactorConfirmedController
 * - TwoFactorStatusController
 */
class MultiFactorAuthenticationController extends Controller
{
    /**
     * The MFA manager instance.
     *
     * @var \MultiFactorAuthentication\MultiFactorAuthenticationManager
     */
    protected $mfaManager;

    /**
     * Create a new controller instance.
     *
     * @param  \MultiFactorAuthentication\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */
    public function __construct(MultiFactorAuthenticationManager $mfaManager)
    {
        $this->mfaManager = $mfaManager;
    }

    /**
     * Show the MFA setup page.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showSetup()
    {
        $user = Auth::user();
        
        if ($this->mfaManager->isEnabled($user)) {
            return redirect()->route('mfa.recovery-codes');
        }

        $secretData = $this->mfaManager->generateSecret($user);

        return view('multi-factor-authentication::setup', [
            'secret' => $secretData['secret'],
            'qrCodeUrl' => $secretData['qr_code_url'],
        ]);
    }

    /**
     * Store the MFA setup.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setup(Request $request)
    {
        $request->validate([
            'secret' => 'required|string',
            'code' => 'required|string|size:6',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->enableTotp($user, $request->input('secret'), $request->input('code'))) {
            return redirect()->route('mfa.recovery-codes')
                ->with('success', 'Multi-factor authentication has been enabled successfully.');
        }

        return back()->withErrors(['code' => 'Invalid verification code. Please try again.']);
    }

    /**
     * Show the MFA verification page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showVerify()
    {
        return view('multi-factor-authentication::verify');
    }

    /**
     * Verify the MFA code.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->verify($user, $request->input('code'))) {
            session(['mfa_verified' => true]);
            
            return redirect()->intended('/')
                ->with('success', 'Multi-factor authentication verified successfully.');
        }

        return back()->withErrors(['code' => 'Invalid verification code. Please try again.']);
    }

    /**
     * Show recovery codes.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function showRecoveryCodes()
    {
        $user = Auth::user();
        
        if (!$this->mfaManager->isEnabled($user)) {
            return redirect()->route('mfa.setup');
        }

        $mfa = $this->mfaManager->getMfaRecord($user);
        
        if (!$mfa) {
            return redirect()->route('mfa.setup');
        }
        
        $recoveryCodes = $mfa->recoveryCodes()
            ->where('used', false)
            ->get();

        return view('multi-factor-authentication::recovery-codes', [
            'recoveryCodes' => $recoveryCodes,
        ]);
    }

    /**
     * Regenerate recovery codes.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function regenerateRecoveryCodes()
    {
        $user = Auth::user();
        $mfa = $this->mfaManager->getMfaRecord($user);

        if (!$mfa) {
            return redirect()->route('mfa.setup');
        }

        $codes = $this->mfaManager->generateRecoveryCodes($mfa);

        return redirect()->route('mfa.recovery-codes')
            ->with('recovery_codes', $codes)
            ->with('success', 'Recovery codes have been regenerated. Please save them securely.');
    }

    /**
     * Disable MFA.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function disable(Request $request)
    {
        $request->validate([
            'password' => 'required|current_password',
        ]);

        $user = Auth::user();

        if ($this->mfaManager->disable($user)) {
            return redirect()->back()
                ->with('success', 'Multi-factor authentication has been disabled.');
        }

        return back()->withErrors(['error' => 'Failed to disable multi-factor authentication.']);
    }
}

