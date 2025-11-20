@extends('layouts.frontend')

@section('title')
    Appointment
@endsection

@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section class="jarallax">
            <img src="{{ asset('assets/images/background/1.webp') }}" class="jarallax-img" alt="">
            <div class="container relative z-2">
                <div class="spacer-single xs-hide"></div>
                <div class="row g-4 justify-content-center align-items-center">

                    <div class="col-lg-6">
                        <div class="relative">

                            {{-- Success Message --}}
                            @if(session('success'))
                                <div id="success_message_col" class="success text-light p-40 h-100 mb-4 rounded-1 bg-success">
                                    <h3>Thank You For Your Appointment</h3>
                                    <p>{{ session('success') }}</p>
                                    <a class="btn-main" href="{{ route('appointment') }}">Make Another Appointment</a>
                                </div>
                            @endif

                            {{-- Validation Errors --}}
                            @if($errors->any())
                                <div class="alert alert-danger mb-4">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form name="bookingForm"
                                  id="booking_form"
                                  class="relative z1000 bg-dark text-light rounded-1 p-40"
                                  method="post"
                                  action="{{ route('appointment.store') }}">

                                @csrf

                                <div class="row g-3">
                                    <div class="col-lg-12">
                                        <h2 class="mb-3">
                                            <i class="fa fa-envelope-o id-color me-2"></i> Make Appointment
                                        </h2>
                                        <p>
                                            Dirty car bringing down your shine? Get it detailed today!
                                            Book your appointment now and drive clean with confidence and style.
                                        </p>
                                        <div class="relative">
                                            <select name="service" id="service"
                                                    class="form-control @error('service') is-invalid @enderror">
                                                <option disabled {{ old('service') ? '' : 'selected' }} value>
                                                    Select Service
                                                </option>
                                                <option value="Exterior Hand Wash & Wax"
                                                    {{ old('service') == 'Exterior Hand Wash & Wax' ? 'selected' : '' }}>
                                                    Exterior Hand Wash & Wax
                                                </option>
                                                <option value="Interior Deep Cleaning"
                                                    {{ old('service') == 'Interior Deep Cleaning' ? 'selected' : '' }}>
                                                    Interior Deep Cleaning
                                                </option>
                                                <option value="Paint Correction"
                                                    {{ old('service') == 'Paint Correction' ? 'selected' : '' }}>
                                                    Paint Correction
                                                </option>
                                                <option value="Ceramic Coating Protection"
                                                    {{ old('service') == 'Ceramic Coating Protection' ? 'selected' : '' }}>
                                                    Ceramic Coating Protection
                                                </option>
                                                <option value="Engine Bay Detailing"
                                                    {{ old('service') == 'Engine Bay Detailing' ? 'selected' : '' }}>
                                                    Engine Bay Detailing
                                                </option>
                                                <option value="Headlight Restoration"
                                                    {{ old('service') == 'Headlight Restoration' ? 'selected' : '' }}>
                                                    Headlight Restoration
                                                </option>
                                            </select>
                                            <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div id="date" class="relative input-group date" data-date-format="mm-dd-yyyy">
                                            <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-calendar"></i>
                                            <input class="form-control @error('date') is-invalid @enderror"
                                                   name="date"
                                                   type="date"
                                                   value="{{ old('date', '') }}"
                                                   placeholder="Select Date">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="relative">
                                            <select name="time" id="time"
                                                    class="form-control @error('time') is-invalid @enderror">
                                                <option disabled {{ old('time') ? '' : 'selected' }} value>
                                                    Select Time
                                                </option>
                                                @foreach(['10:00 AM','11:00 AM','12:00 PM','1:00 PM','2:00 PM','3:00 PM','4:00 PM','5:00 PM','6:00 PM','7:00 PM','8:00 PM'] as $t)
                                                    <option value="{{ $t }}" {{ old('time') == $t ? 'selected' : '' }}>
                                                        {{ $t }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <input type="text"
                                               name="name"
                                               id="name"
                                               placeholder="Name"
                                               class="form-control @error('name') is-invalid @enderror"
                                               value="{{ old('name') }}"
                                               required>
                                    </div>

                                    <div class="col-lg-4">
                                        <input type="email"
                                               name="email"
                                               id="email"
                                               placeholder="Email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               value="{{ old('email') }}"
                                               required>
                                    </div>

                                    <div class="col-lg-4">
                                        <input type="text"
                                               name="phone"
                                               id="phone"
                                               placeholder="Phone"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               value="{{ old('phone') }}"
                                               required>
                                    </div>

                                    <div class="col-lg-12">
                                        <textarea name="message"
                                                  id="message"
                                                  class="form-control @error('message') is-invalid @enderror"
                                                  placeholder="Message">{{ old('message') }}</textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <div id='submit'>
                                            <input type='submit'
                                                   id='send_message'
                                                   value='Send Appointment'
                                                   class="btn-main">
                                        </div>
                                    </div>
                                </div>

                                {{-- Old error block – now handled via $errors --}}
                                <div id="error_message" class='error d-none'>
                                    Sorry there was an error sending your form.
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sw-overlay"></div>
        </section>

    </div>
    <!-- content end -->
@endsection
