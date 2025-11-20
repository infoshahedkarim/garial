<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentCreated;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Show the appointment form.
     */
    public function index()
    {
        return view('frontend.appointment'); // adjust path if different
    }

    /**
     * Handle appointment form submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service' => 'required|string|max:255',
            'date'    => 'required|string|max:255', // if you later convert to real date, change rule
            'time'    => 'required|string|max:50',
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'message' => 'nullable|string',
        ]);

        // Save to DB
        $appointment = Appointment::create($validated);

        // Send mail to admin
        $adminEmail = env('MAIL_TO_ADDRESS', config('mail.from.address'));
        if ($adminEmail) {
            Mail::to($adminEmail)->send(new AppointmentCreated($appointment));
        }

        // Redirect back with success message
        return redirect()
            ->route('appointment')
            ->with('success', 'Your appointment request has been submitted successfully. We will contact you soon.');
    }
}
