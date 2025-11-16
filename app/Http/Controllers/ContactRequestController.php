<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    /**
     * Display the contact request form.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a simple contact request submission.
     */
    public function store(Request $request)
    {
        $fullName = $request->input('full_name');
        $phoneNumber = $request->input('phone_number');
        $email = $request->input('email');
        $message = $request->input('message');

        // Persist a lightweight snapshot so the example stays easy to follow.
        ContactRequest::create([
            'full_name' => $fullName,
            'phone_number' => $phoneNumber,
            'email' => $email,
            'message' => $message,
        ]);

        return redirect()
            ->route('contact.form')
            ->with('status', 'Your contact request has been sent successfully. Thank you.');
    }
}
