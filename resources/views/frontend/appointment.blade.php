

@extends('layouts.frontend')

@section('title')
    Appointment
@endsection

@section('content')
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section class="jarallax">
                <img src="{{asset('assets/images/background/1.webp')}}" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="spacer-single xs-hide"></div>
                    <div class="row g-4 justify-content-center align-items-center">

                        <div class="col-lg-6">
                            <div class="relative">
                                <div id="success_message_col" class='success text-light p-40 h-100'>
                                    <h3>Thank You For Your Order</h3>
                                    <p>We have received your request and will be processing it shortly. Click button below if you want to make another order.</p>
                                    <a class="btn-main" href="{{route('appointment')}}">Re-order</a>
                                </div>

                                <form name="bookingForm" id="booking_form" class="relative z1000 bg-dark text-light rounded-1 p-40" method="post" action="booking.php">

                                    <div class="row g-3">
                                        <div class="col-lg-12">
                                            <h2 class="mb-3"><i class="fa fa-envelope-o id-color me-2"></i> Make Appointment</h2>
                                            <p>Dirty car bringing down your shine? Get it detailed today! Book your appointment now and drive clean with confidence and style.</p>
                                            <div class="relative">
                                                <select name="service" id="service" class="form-control">
                                                    <option disabled selected value>Select Service</option>
                                                    <option value="Exterior Hand Wash & Wax">Exterior Hand Wash & Wax</option>
                                                    <option value="Interior Deep Cleaning">Interior Deep Cleaning</option>
                                                    <option value="Paint Correction">Paint Correction</option>
                                                    <option value="Ceramic Coating Protection">Ceramic Coating Protection</option>
                                                    <option value="Engine Bay Detailing">Engine Bay Detailing</option>
                                                    <option value="Headlight Restoration">Headlight Restoration</option>
                                                </select>


                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div id="date" class="relative input-group date" data-date-format="mm-dd-yyyy">
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-calendar"></i>
                                                <input class="form-control" value="Select Date" name="date" type="text" >
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="relative">
                                                <select name="time" id="time" class="form-control">
                                                    <option disabled selected value>Select Time</option>
                                                    <option value="10:00">10:00</option>
                                                    <option value="11:00">11:00</option>
                                                    <option value="12:00">12:00</option>
                                                    <option value="13:00">13:00</option>
                                                    <option value="14:00">14:00</option>
                                                    <option value="15:00">15:00</option>
                                                    <option value="16:00">16:00</option>
                                                    <option value="17:00">17:00</option>
                                                    <option value="18:00">18:00</option>
                                                    <option value="19:00">19:00</option>
                                                    <option value="20:00">20:00</option>
                                                </select>
                                                <i class="absolute top-0 end-0 id-color pt-3 pe-3 icofont-simple-down"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" name="name" id="name" placeholder="Name" class="form-control" placeholder="" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" placeholder="" required>
                                        </div>

                                        <div class="col-lg-4">
                                            <input type="text" name="phone" id="phone" placeholder="Phone" class="form-control" placeholder="" required>
                                        </div>

                                        <div class="col-lg-12">
                                            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                        </div>

                                        <div class="col-lg-12">
                                            <div id='submit'>
                                                <input type='submit' id='send_message' value='Send Appointment' class="btn-main">
                                            </div>
                                        </div>
                                    </div>

                                    <div id="error_message" class='error'>
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

    </div>

@endsection
