{{-- resources/views/backend/appointments/index.blade.php --}}

<div class="flex h-full w-full items-stretch justify-center bg-transparent">
    {{-- Outer card, centered --}}
    <div class="my-4 w-full max-w-5xl rounded-2xl border border-slate-300 bg-white shadow-md dark:border-slate-700 dark:bg-slate-900">
        {{-- Header --}}
        <div class="flex flex-col gap-2 border-b border-slate-200 px-4 py-4 dark:border-slate-700 sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <div>
                <h3 class="text-lg font-semibold tracking-tight text-slate-900 dark:text-slate-50">
                    Appointments
                </h3>
                <p class="mt-1 text-xs sm:text-sm text-slate-500 dark:text-slate-300">
                    Manage customer booking requests and keep track of their status.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <span class="inline-flex items-center rounded-full border border-slate-200 bg-white px-3 py-1 text-xs font-medium text-slate-700 shadow-sm dark:border-slate-600 dark:bg-slate-800 dark:text-slate-100">
                    Total
                    <span class="ml-1 rounded-full bg-slate-900 px-2 py-0.5 text-xs font-semibold text-slate-50 dark:bg-slate-100 dark:text-slate-900">
                        {{ $appointments->total() }}
                    </span>
                </span>
            </div>
        </div>

        {{-- Body --}}
        <div class="space-y-4 px-4 py-4 sm:px-6 sm:py-6">
            {{-- Success flash message --}}
            @if(session('success'))
                <div class="rounded-xl border border-emerald-400 bg-emerald-50 px-4 py-3 text-sm text-emerald-900 shadow-sm dark:border-emerald-500 dark:bg-emerald-900/60 dark:text-emerald-50">
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-start gap-2">
                            <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-emerald-600 text-xs font-bold text-white">
                                ✓
                            </span>
                            <p>{{ session('success') }}</p>
                        </div>
                        <button type="button"
                                onclick="this.closest('div').remove()"
                                class="inline-flex h-5 w-5 items-center justify-center rounded-full text-emerald-700 hover:bg-emerald-100 dark:text-emerald-100 dark:hover:bg-emerald-800/70">
                            ✕
                        </button>
                    </div>
                </div>
            @endif

            {{-- Table container --}}
            <div class="w-full overflow-x-auto" style="margin-top: 40px">
                <div class="min-w-full overflow-hidden rounded-xl border border-slate-300 dark:border-slate-700">
                    <table class="w-full text-xs sm:text-sm">
                        {{-- Table head --}}
                        <thead class="border-b border-slate-300 bg-slate-50 dark:border-slate-700 dark:bg-slate-800">
                            <tr>
                                <th class="whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200">
                                    ID
                                </th>
                                <th class="whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200">
                                    Service
                                </th>
                                <th class="whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200">
                                    Customer
                                </th>
                                <th class="hidden whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200 md:table-cell">
                                    Phone
                                </th>
                                <th class="hidden whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200 lg:table-cell">
                                    Date &amp; Time
                                </th>
                                <th class="whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200">
                                    Status
                                </th>
                                <th class="hidden whitespace-nowrap border-r border-slate-200 px-3 py-3 text-left text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:border-slate-700 dark:text-slate-200 md:table-cell">
                                    Created
                                </th>
                                <th class="whitespace-nowrap px-3 py-3 text-right text-[0.7rem] font-semibold uppercase tracking-wide text-slate-700 dark:text-slate-200">
                                    Actions
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white dark:bg-slate-900">
                            @forelse($appointments as $appointment)
                                <tr class="border-t border-slate-200 hover:bg-slate-50 dark:border-slate-800 dark:hover:bg-slate-800">
                                    {{-- ID --}}
                                    <td class="whitespace-nowrap border-r border-slate-200 px-3 py-3 text-[0.75rem] font-medium text-slate-800 dark:border-slate-800 dark:text-slate-100">
                                        #{{ $appointment->id }}
                                    </td>

                                    {{-- Service --}}
                                    <td class="max-w-[200px] truncate border-r border-slate-200 px-3 py-3 text-sm font-semibold text-slate-900 dark:border-slate-800 dark:text-slate-50">
                                        {{ $appointment->service }}
                                    </td>

                                    {{-- Name + email --}}
                                    <td class="border-r border-slate-200 px-3 py-3 text-sm text-slate-800 dark:border-slate-800 dark:text-slate-100">
                                        <div class="font-medium">{{ $appointment->name }}</div>
                                        <div class="text-[0.7rem] text-slate-500 dark:text-slate-300">
                                            {{ $appointment->email }}
                                        </div>
                                    </td>

                                    {{-- Phone --}}
                                    <td class="hidden border-r border-slate-200 px-3 py-3 text-sm text-slate-700 dark:border-slate-800 dark:text-slate-200 md:table-cell">
                                        {{ $appointment->phone }}
                                    </td>

                                    {{-- Date & time --}}
                                    <td class="hidden border-r border-slate-200 px-3 py-3 text-xs text-slate-700 dark:border-slate-800 dark:text-slate-200 lg:table-cell">
                                        <div>{{ $appointment->date }}</div>
                                        <div class="mt-0.5 text-[0.7rem] text-slate-500 dark:text-slate-300">
                                            {{ $appointment->time }}
                                        </div>
                                    </td>

                                    {{-- Status --}}
                                    <td class="border-r border-slate-200 px-3 py-3 dark:border-slate-800">
                                        @php
                                            $status = $appointment->status;
                                            $statusLabel = ucfirst($status);
                                            $statusClasses = match($status) {
                                                'pending'   => 'bg-amber-100 text-amber-900 ring-1 ring-amber-300 dark:bg-amber-900/60 dark:text-amber-50 dark:ring-amber-500',
                                                'confirmed' => 'bg-blue-100 text-blue-900 ring-1 ring-blue-300 dark:bg-blue-900/60 dark:text-blue-50 dark:ring-blue-500',
                                                'completed' => 'bg-emerald-100 text-emerald-900 ring-1 ring-emerald-300 dark:bg-emerald-900/60 dark:text-emerald-50 dark:ring-emerald-500',
                                                'cancelled' => 'bg-rose-100 text-rose-900 ring-1 ring-rose-300 dark:bg-rose-900/60 dark:text-rose-50 dark:ring-rose-500',
                                                default     => 'bg-slate-100 text-slate-900 ring-1 ring-slate-300 dark:bg-slate-800 dark:text-slate-50 dark:ring-slate-600',
                                            };
                                        @endphp
                                        <span class="inline-flex items-center gap-1 rounded-full px-2.5 py-0.5 text-[0.7rem] font-medium {{ $statusClasses }}">
                                            <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                                            {{ $statusLabel }}
                                        </span>
                                    </td>

                                    {{-- Created --}}
                                    <td class="hidden border-r border-slate-200 px-3 py-3 text-[0.7rem] text-slate-600 dark:border-slate-800 dark:text-slate-300 md:table-cell">
                                        {{ $appointment->created_at?->format('d M Y, h:i A') }}
                                    </td>

                                    {{-- Actions --}}
                                    <td class="whitespace-nowrap px-3 py-3 text-right">
                                        <div class="inline-flex items-center gap-2">
                                            <a href="{{ route('back.appointments.show', $appointment->id) }}"
                                               class="inline-flex items-center rounded-full border border-blue-400 px-3 py-1.5 text-[0.72rem] font-medium text-blue-700 transition hover:bg-blue-50 dark:border-blue-500 dark:text-blue-100 dark:hover:bg-blue-900/60">
                                                View
                                            </a>

                                            <form action="{{ route('back.appointments.destroy', $appointment->id) }}"
                                                  method="POST"
                                                  class="inline-block"
                                                  onsubmit="return confirm('Are you sure you want to delete this appointment?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="inline-flex items-center rounded-full border border-rose-400 px-3 py-1.5 text-[0.72rem] font-medium text-rose-700 transition hover:bg-rose-50 dark:border-rose-500 dark:text-rose-100 dark:hover:bg-rose-900/60">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-3 py-10 text-center">
                                        <div class="mx-auto flex max-w-md flex-col items-center justify-center gap-3">
                                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-100 text-slate-400 dark:bg-slate-800 dark:text-slate-500">
                                                📅
                                            </div>
                                            <div class="space-y-1">
                                                <p class="text-sm font-medium text-slate-800 dark:text-slate-50">
                                                    No appointments found yet
                                                </p>
                                                <p class="text-xs text-slate-500 dark:text-slate-300">
                                                    Once customers start booking from the frontend, their requests will appear here.
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Pagination --}}
            @if($appointments->hasPages())
                <div class="mt-4 flex justify-center">
                    {{ $appointments->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
