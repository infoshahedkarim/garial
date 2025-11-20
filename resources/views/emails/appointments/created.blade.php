@component('mail::message')
# New Appointment Request

You have received a new appointment request.

@component('mail::panel')
**Service:** {{ $appointment->service }}
**Date:** {{ $appointment->date }}
**Time:** {{ $appointment->time }}

**Name:** {{ $appointment->name }}
**Email:** {{ $appointment->email }}
**Phone:** {{ $appointment->phone }}
@endcomponent

@if($appointment->message)
**Message:**
{{ $appointment->message }}
@endif

Thanks,
{{ config('app.name') }}
@endcomponent
