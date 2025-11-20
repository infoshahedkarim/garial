<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * List all appointments for admin.
     */
    public function index()
    {
        // You can add filters later (status, date, etc.)
        $appointments = Appointment::latest()->paginate(20);

        return view('dashboard', compact('appointments'));
    }

    /**
     * Show single appointment details.
     */
    public function show(Appointment $appointment)
    {
        return view('backend.appointments.show', compact('appointment'));
    }

    /**
     * Update appointment (mainly status).
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,completed,cancelled',
        ]);

        $appointment->status = $request->status;
        $appointment->save();

        return redirect()
            ->back()
            ->with('success', 'Appointment status updated successfully.');
    }

    /**
     * Delete an appointment.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()
            ->route('back.appointments.index')
            ->with('success', 'Appointment deleted successfully.');
    }
}
