<x-layouts.app :title="__('Appointment #'.$appointment->id)">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 bg-neutral-50 dark:border-neutral-800 dark:bg-neutral-950">

            <div class="flex h-full w-full items-stretch justify-center">
                {{-- Centered outer card --}}
                <div
                    class="my-6 w-full max-w-5xl rounded-2xl border border-neutral-300 bg-white text-neutral-900 shadow-md
                           dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-50"
                >

                    {{-- Header --}}
                    <div class="flex flex-col gap-3 border-b border-neutral-200 px-4 py-4 dark:border-neutral-700 sm:flex-row sm:items-center sm:justify-between sm:px-6">
                        <div>
                            <h2 class="text-lg font-semibold tracking-tight text-neutral-900 dark:text-neutral-50">
                                Appointment #{{ $appointment->id }}
                            </h2>
                            <p class="mt-1 text-xs sm:text-sm text-neutral-600 dark:text-neutral-300">
                                View and manage this customer’s booking details.
                            </p>
                        </div>

                        <a href="{{ route('back.appointments.index') }}"
                           class="inline-flex items-center gap-1 rounded-full border border-neutral-300 bg-white px-3 py-1.5 text-xs font-medium text-neutral-800 shadow-sm hover:bg-neutral-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-900 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-50 dark:border-neutral-600 dark:bg-neutral-800 dark:text-neutral-50 dark:hover:bg-neutral-700 dark:focus-visible:ring-neutral-200 dark:focus-visible:ring-offset-neutral-900"
                           aria-label="Back to appointment list">
                            <span class="text-sm" aria-hidden="true">←</span>
                            <span>Back to list</span>
                        </a>
                    </div>

                    {{-- Flash + errors --}}
                    <div class="space-y-3 px-4 pt-4 sm:px-6">
                        @if (session('success'))
                            <div class="rounded-xl border border-emerald-300 bg-emerald-50 px-4 py-3 text-sm text-emerald-900 shadow-sm dark:border-emerald-500 dark:bg-emerald-900 dark:text-emerald-50" role="status">
                                <div class="flex items-start justify-between gap-3">
                                    <div class="flex items-start gap-2">
                                        <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-emerald-700 text-xs font-bold text-white">
                                            ✓
                                        </span>
                                        <p>{{ session('success') }}</p>
                                    </div>
                                    <button type="button"
                                            onclick="this.closest('div').remove()"
                                            class="inline-flex h-5 w-5 items-center justify-center rounded-full text-emerald-800 hover:bg-emerald-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-emerald-700 focus-visible:ring-offset-2 focus-visible:ring-offset-emerald-50 dark:text-emerald-100 dark:hover:bg-emerald-800/70 dark:focus-visible:ring-emerald-300 dark:focus-visible:ring-offset-emerald-900"
                                            aria-label="Dismiss success message">
                                        ✕
                                    </button>
                                </div>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="rounded-xl border border-rose-300 bg-rose-50 px-4 py-3 text-sm text-rose-900 shadow-sm dark:border-rose-500 dark:bg-rose-900 dark:text-rose-50" role="alert">
                                <div class="flex items-start gap-2">
                                    <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-rose-700 text-xs font-bold text-white">
                                        !
                                    </span>
                                    <ul class="space-y-1">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>

                    {{-- Main content --}}
                    <div class="px-4 pb-6 pt-4 sm:px-6">
                        <div class="grid gap-4 lg:grid-cols-3 lg:gap-6">

                            {{-- LEFT: Appointment info + message --}}
                            <div class="space-y-4 lg:col-span-2">
                                {{-- Appointment information --}}
                                <section class="rounded-xl border border-neutral-200 bg-neutral-50 p-4 shadow-sm dark:border-neutral-700 dark:bg-neutral-900"
                                         aria-labelledby="appointment-info-heading">
                                    <h3 id="appointment-info-heading" class="mb-3 text-sm font-semibold uppercase tracking-wide text-neutral-700 dark:text-neutral-200">
                                        Appointment Information
                                    </h3>

                                    <dl class="grid grid-cols-1 gap-x-6 gap-y-3 text-sm sm:grid-cols-2">
                                        <div>
                                            <dt class="text-xs font-medium uppercase tracking-wide text-neutral-600 dark:text-neutral-300">
                                                Service
                                            </dt>
                                            <dd class="mt-1 font-medium text-neutral-900 dark:text-neutral-50">
                                                {{ $appointment->service }}
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs font-medium uppercase tracking-wide text-neutral-600 dark:text-neutral-300">
                                                Date
                                            </dt>
                                            <dd class="mt-1 text-neutral-800 dark:text-neutral-100">
                                                {{ $appointment->date }}
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs font-medium uppercase tracking-wide text-neutral-600 dark:text-neutral-300">
                                                Time
                                            </dt>
                                            <dd class="mt-1 text-neutral-800 dark:text-neutral-100">
                                                {{ $appointment->time }}
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs font-medium uppercase tracking-wide text-neutral-600 dark:text-neutral-300">
                                                Status
                                            </dt>
                                            <dd class="mt-1">
                                                @php
                                                    $status = $appointment->status;
                                                    $statusLabel = ucfirst($status);
                                                    $statusClasses = match($status) {
                                                        'pending'   => 'bg-amber-100 text-amber-900 ring-1 ring-amber-300 dark:bg-amber-950 dark:text-amber-100 dark:ring-amber-600',
                                                        'confirmed' => 'bg-blue-100 text-blue-900 ring-1 ring-blue-300 dark:bg-blue-950 dark:text-blue-100 dark:ring-blue-600',
                                                        'completed' => 'bg-emerald-100 text-emerald-900 ring-1 ring-emerald-300 dark:bg-emerald-950 dark:text-emerald-100 dark:ring-emerald-600',
                                                        'cancelled' => 'bg-rose-100 text-rose-900 ring-1 ring-rose-300 dark:bg-rose-950 dark:text-rose-100 dark:ring-rose-600',
                                                        default     => 'bg-neutral-100 text-neutral-900 ring-1 ring-neutral-300 dark:bg-neutral-800 dark:text-neutral-100 dark:ring-neutral-600',
                                                    };
                                                @endphp
                                                <span class="inline-flex items-center gap-1 rounded-full px-2.5 py-0.5 text-xs font-medium {{ $statusClasses }}">
                                                    <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
                                                    {{ $statusLabel }}
                                                </span>
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs font-medium uppercase tracking-wide text-neutral-600 dark:text-neutral-300">
                                                Created At
                                            </dt>
                                            <dd class="mt-1 text-xs text-neutral-700 dark:text-neutral-300">
                                                {{ $appointment->created_at?->format('d M Y h:i A') }}
                                            </dd>
                                        </div>

                                        <div>
                                            <dt class="text-xs font-medium uppercase tracking-wide text-neutral-600 dark:text-neutral-300">
                                                Updated At
                                            </dt>
                                            <dd class="mt-1 text-xs text-neutral-700 dark:text-neutral-300">
                                                {{ $appointment->updated_at?->format('d M Y h:i A') }}
                                            </dd>
                                        </div>
                                    </dl>
                                </section>

                                {{-- Customer message --}}
                                @if ($appointment->message)
                                    <section class="rounded-xl border border-neutral-200 bg-white p-4 shadow-sm dark:border-neutral-700 dark:bg-neutral-900"
                                             aria-labelledby="customer-message-heading">
                                        <h3 id="customer-message-heading" class="mb-3 text-sm font-semibold uppercase tracking-wide text-neutral-700 dark:text-neutral-200">
                                            Customer Message
                                        </h3>
                                        <p class="text-sm leading-relaxed text-neutral-800 dark:text-neutral-100">
                                            {{ $appointment->message }}
                                        </p>
                                    </section>
                                @endif
                            </div>

                            {{-- RIGHT: Customer details + actions --}}
                            <div class="space-y-4">
                                {{-- Customer details --}}
                                <section class="rounded-xl border border-neutral-200 bg-white p-4 shadow-sm dark:border-neutral-700 dark:bg-neutral-900"
                                         aria-labelledby="customer-details-heading">
                                    <h3 id="customer-details-heading" class="mb-3 text-sm font-semibold uppercase tracking-wide text-neutral-700 dark:text-neutral-200">
                                        Customer Details
                                    </h3>

                                    <div class="space-y-2 text-sm">
                                        <p class="text-neutral-800 dark:text-neutral-100">
                                            <span class="font-medium text-neutral-700 dark:text-neutral-300">Name:</span>
                                            <span class="ml-1">{{ $appointment->name }}</span>
                                        </p>
                                        <p class="text-neutral-800 dark:text-neutral-100">
                                            <span class="font-medium text-neutral-700 dark:text-neutral-300">Email:</span>
                                            <span class="ml-1">{{ $appointment->email }}</span>
                                        </p>
                                        <p class="text-neutral-800 dark:text-neutral-100">
                                            <span class="font-medium text-neutral-700 dark:text-neutral-300">Phone:</span>
                                            <span class="ml-1">{{ $appointment->phone }}</span>
                                        </p>
                                    </div>
                                </section>

                                {{-- Update status --}}
                                <section class="rounded-xl border border-neutral-200 bg-neutral-50 p-4 shadow-sm dark:border-neutral-700 dark:bg-neutral-900"
                                         aria-labelledby="update-status-heading">
                                    <h3 id="update-status-heading" class="mb-3 text-sm font-semibold uppercase tracking-wide text-neutral-700 dark:text-neutral-200">
                                        Update Status
                                    </h3>

                                    <form action="{{ route('back.appointments.update', $appointment->id) }}" method="POST" class="space-y-3">
                                        @csrf
                                        @method('PUT')

                                        <div class="space-y-1">
                                            <label for="status" class="text-xs font-medium uppercase tracking-wide text-neutral-700 dark:text-neutral-300">
                                                Status
                                            </label>
                                            <select
                                                name="status"
                                                id="status"
                                                class="block w-full rounded-lg border border-neutral-300 bg-white px-3 py-2 text-sm text-neutral-900 shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-900 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-50 dark:border-neutral-600 dark:bg-neutral-900 dark:text-neutral-50 dark:focus-visible:ring-neutral-200 dark:focus-visible:ring-offset-neutral-900"
                                            >
                                                <option value="pending"   {{ $appointment->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </div>

                                        <button
                                            type="submit"
                                            class="inline-flex w-full items-center justify-center rounded-lg bg-neutral-900 px-3 py-2 text-sm font-medium text-white shadow-sm hover:bg-neutral-800 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-neutral-900 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-50 dark:bg-neutral-100 dark:text-neutral-900 dark:hover:bg-neutral-200 dark:focus-visible:ring-neutral-200 dark:focus-visible:ring-offset-neutral-900"
                                        >
                                            Save Changes
                                        </button>
                                    </form>
                                </section>

                                {{-- Danger zone --}}
                                <section class="rounded-xl border border-rose-200 bg-rose-50 p-4 shadow-sm dark:border-rose-600 dark:bg-rose-950"
                                         aria-labelledby="danger-zone-heading">
                                    <h3 id="danger-zone-heading" class="mb-2 text-sm font-semibold uppercase tracking-wide text-rose-800 dark:text-rose-100">
                                        Danger Zone
                                    </h3>
                                    <p class="mb-3 text-xs text-rose-800/90 dark:text-rose-100/80">
                                        Deleting this appointment is permanent and cannot be undone.
                                    </p>
                                    <form action="{{ route('back.appointments.destroy', $appointment->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Are you sure you want to delete this appointment? This action cannot be undone.');">
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="inline-flex w-full items-center justify-center rounded-lg border border-rose-300 bg-transparent px-3 py-2 text-sm font-medium text-rose-800 hover:bg-rose-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-rose-600 focus-visible:ring-offset-2 focus-visible:ring-offset-rose-50 dark:border-rose-500 dark:text-rose-100 dark:hover:bg-rose-900/70 dark:focus-visible:ring-rose-400 dark:focus-visible:ring-offset-rose-950"
                                        >
                                            Delete Appointment
                                        </button>
                                    </form>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layouts.app>
