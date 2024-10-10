<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'services' => 'array',
            'message' => 'required|string|max:1000',
        ]);
    
        // Send the email using the ContactFormMail Mailable class
        Mail::to('jaydenlyricr@gmail.com')->send(new ContactFormMail($validatedData));
    
        // Return back with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
    
}
