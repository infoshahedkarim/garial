{{-- resources/views/backend/appointments/index.blade.php --}}

<div style="display:flex; justify-content:center; width:100%; padding:24px 16px; box-sizing:border-box;">
    {{-- Outer card --}}
    <div style="
        width:100%;
        max-width:1100px;
        background:#ffffff;
        border-radius:16px;
        border:1px solid #e2e8f0;
        box-shadow:0 10px 25px rgba(15,23,42,0.06);
        font-family:system-ui,-apple-system,BlinkMacSystemFont,'Segoe UI',sans-serif;
        color:#0f172a;
    ">
        {{-- Header --}}
        <div style="
            padding:16px 24px;
            border-bottom:1px solid #e2e8f0;
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            gap:12px;
            flex-wrap:wrap;
        ">
            <div>
                <h3 style="margin:0; font-size:18px; font-weight:600; color:#020617;">
                    Appointments
                </h3>
                <p style="margin:4px 0 0; font-size:12px; color:#64748b;">
                    Manage customer booking requests and keep track of their status.
                </p>
            </div>

            <div style="display:flex; align-items:center; gap:8px;">
                <span style="
                    display:inline-flex;
                    align-items:center;
                    border-radius:999px;
                    border:1px solid #e2e8f0;
                    background:#ffffff;
                    padding:4px 10px;
                    font-size:11px;
                    font-weight:500;
                    color:#475569;
                ">
                    Total
                    <span style="
                        margin-left:4px;
                        border-radius:999px;
                        background:#0f172a;
                        padding:2px 8px;
                        font-size:11px;
                        font-weight:600;
                        color:#f9fafb;
                    ">
                        {{ $appointments->total() }}
                    </span>
                </span>
            </div>
        </div>

        {{-- Body --}}
        <div style="padding:16px 24px 20px;">
            {{-- Flash success --}}
            @if(session('success'))
                <div style="
                    margin-bottom:16px;
                    border-radius:12px;
                    border:1px solid #4ade80;
                    background:#ecfdf3;
                    padding:10px 12px;
                    font-size:13px;
                    color:#166534;
                ">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Table --}}
            <div style="margin-top:16px; overflow-x:auto;">
                <table style="
                    width:100%;
                    border-collapse:collapse;
                    font-size:13px;
                    color:#0f172a;
                ">
                    <thead>
                        <tr>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                ID
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Service
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Customer
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Phone
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Date &amp; Time
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Status
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:left; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Created
                            </th>
                            <th style="border:1px solid #e2e8f0; padding:8px 10px; background:#f8fafc; text-align:right; font-weight:600; text-transform:uppercase; letter-spacing:.05em; font-size:11px;">
                                Actions
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($appointments as $appointment)
                            <tr style="background:#ffffff;">
                                <td style="border:1px solid #e2e8f0; padding:8px 10px; white-space:nowrap;">
                                    #{{ $appointment->id }}
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px; max-width:220px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                                    {{ $appointment->service }}
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px;">
                                    <div style="font-weight:500;">{{ $appointment->name }}</div>
                                    <div style="font-size:11px; color:#64748b;">{{ $appointment->email }}</div>
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px; white-space:nowrap;">
                                    {{ $appointment->phone }}
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px; font-size:12px;">
                                    <div>{{ $appointment->date }}</div>
                                    <div style="margin-top:2px; font-size:11px; color:#64748b;">
                                        {{ $appointment->time }}
                                    </div>
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px;">
                                    @php
                                        $status = $appointment->status;
                                        $statusLabel = ucfirst($status);
                                        $bg = '#e2e8f0';
                                        $color = '#0f172a';

                                        if ($status === 'pending')   { $bg = '#fef3c7'; $color = '#92400e'; }
                                        if ($status === 'confirmed') { $bg = '#dbeafe'; $color = '#1d4ed8'; }
                                        if ($status === 'completed') { $bg = '#dcfce7'; $color = '#166534'; }
                                        if ($status === 'cancelled') { $bg = '#fee2e2'; $color = '#b91c1c'; }
                                    @endphp
                                    <span style="
                                        display:inline-flex;
                                        align-items:center;
                                        border-radius:999px;
                                        padding:3px 10px;
                                        font-size:11px;
                                        font-weight:500;
                                        background:{{ $bg }};
                                        color:{{ $color }};
                                    ">
                                        {{ $statusLabel }}
                                    </span>
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px; font-size:11px; color:#64748b; white-space:nowrap;">
                                    {{ $appointment->created_at?->format('d M Y, h:i A') }}
                                </td>
                                <td style="border:1px solid #e2e8f0; padding:8px 10px; text-align:right; white-space:nowrap;">
                                    <a href="{{ route('back.appointments.show', $appointment->id) }}"
                                       style="
                                           display:inline-block;
                                           margin-right:6px;
                                           border-radius:999px;
                                           border:1px solid #60a5fa;
                                           padding:4px 10px;
                                           font-size:11px;
                                           font-weight:500;
                                           color:#1d4ed8;
                                           text-decoration:none;
                                           background:#eff6ff;
                                       ">
                                        View
                                    </a>

                                    <form action="{{ route('back.appointments.destroy', $appointment->id) }}"
                                          method="POST"
                                          style="display:inline-block;"
                                          onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                style="
                                                    border-radius:999px;
                                                    border:1px solid #fca5a5;
                                                    padding:4px 10px;
                                                    font-size:11px;
                                                    font-weight:500;
                                                    color:#b91c1c;
                                                    background:#fef2f2;
                                                    cursor:pointer;
                                                ">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" style="border:1px solid #e2e8f0; padding:24px 10px; text-align:center;">
                                    <div style="max-width:320px; margin:0 auto; color:#64748b; font-size:13px;">
                                        <div style="font-size:24px; margin-bottom:8px;">📅</div>
                                        <div style="font-weight:500; color:#0f172a; margin-bottom:4px;">
                                            No appointments found yet
                                        </div>
                                        <div>
                                            Once customers start booking from the frontend, their requests will appear here.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            @if($appointments->hasPages())
                <div style="margin-top:16px; display:flex; justify-content:center;">
                    {{ $appointments->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
