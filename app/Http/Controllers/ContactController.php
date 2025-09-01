<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show the contact form
    public function showForm()
    {
        return view('pages.contact');
    }

    // Handle form submission (Task 3 + Task 4)
    public function submitForm(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048', // Task 4
        ]);

        // File upload (Task 4)
        $fileName = null;
        if ($request->hasFile('file')) {
            $fileName = $request->file('file')->store('uploads'); // storage/app/uploads
        }

        // Session success message (Task 3)
        session()->flash('success', 'Form submitted successfully!');

        // Redirect to confirmation page with form data
        $response = redirect()->route('contact.confirmation')->with([
            'formData' => $request->except('file'),
            'fileName' => $fileName
        ]);

        // Set cookie if file uploaded (Task 4)
        if ($fileName) {
            $response->withCookie(cookie('file_uploaded', true, 60)); // 60 minutes
        }

        return $response;
    }

    // Show confirmation page
    public function confirmation()
    {
        return view('pages.contact-confirmation');
    }
}
