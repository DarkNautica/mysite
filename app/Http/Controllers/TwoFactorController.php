<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\TwoFactorCodeMail;
use Illuminate\Support\Facades\Log;

class TwoFactorController extends Controller
{
    /**
     * Display the 2FA setup page, generate and send the code via email.
     * This method generates and sends the 2FA code and then automatically redirects to the verification page.
     */
    public function show2faSetup(Request $request)
    {
        $user = Auth::user();

        // Generate a random 6-digit 2FA code every time the setup is called
        $twoFACode = random_int(100000, 999999);

        // Save the 2FA code in the user's session for verification later
        Session::put('2fa_code', $twoFACode);

        // Debug: Log the generated 2FA code
        Log::info('Generated 2FA Code: ' . $twoFACode);

        // Send the 2FA code via email using Mailgun
        Mail::to($user->email)->send(new TwoFactorCodeMail($twoFACode));

        // Debug: Log the email to which the code is being sent
        Log::info('2FA code sent to email: ' . $user->email);

        // Redirect to the verification page immediately after sending the code
        return redirect()->route('2fa.verify')->with('success', 'A verification code has been sent to your email.');
    }

    /**
     * Show the 2FA verification form where the user enters the code.
     */
    public function show2faVerify(Request $request)
    {
        // Check if the 2FA code is set in the session, if not redirect to setup to generate a new one
        if (!Session::has('2fa_code')) {
            // Debug: Log a message indicating the missing 2FA code in the session
            Log::warning('2FA code not found in session, redirecting to setup.');

            return redirect()->route('2fa.setup')->with('warning', '2FA code not found. A new code has been sent to your email.');
        }

        // Display the verification page
        return view('2fa.verify');
    }

    /**
     * Verify the 2FA code entered by the user.
     */
    public function verify2fa(Request $request)
    {
        $request->validate([
            'verify-code' => 'required|numeric',
        ]);

        $user = Auth::user();
        $inputCode = $request->input('verify-code');

        // Get the code from session for verification
        $storedCode = Session::get('2fa_code');

        // Debug: Log the input code and stored code to compare them
        Log::info('Input Code: ' . $inputCode);
        Log::info('Stored Code: ' . $storedCode);

        // Check if the provided code matches the stored code
        if ((string)$inputCode === (string)$storedCode) {
            // Debug: Log a message indicating a successful verification
            Log::info('2FA verification successful for user: ' . $user->email);

            // Mark this session as 2FA verified
            $request->session()->put('2fa_verified', true);

            // Clear the 2FA code from the session after successful verification
            Session::forget('2fa_code');

            return redirect()->intended('dashboard')->with('success', '2FA verified successfully!');
        } else {
            // Debug: Log a message indicating a failed verification
            Log::warning('2FA verification failed for user: ' . $user->email . '. Input Code: ' . $inputCode . ' - Stored Code: ' . $storedCode);

            return redirect()->back()->withErrors(['verify-code' => 'Invalid verification code, please try again.']);
        }
    }

    /**
     * Disable 2FA for the user.
     */
    public function disable2fa(Request $request)
    {
        $user = Auth::user();
        
        // Clear the 2FA code from session
        Session::forget('2fa_code');

        // Debug: Log the 2FA disable action
        Log::info('2FA disabled for user: ' . $user->email);

        return redirect()->route('dashboard')->with('success', '2FA disabled successfully!');
    }
}
