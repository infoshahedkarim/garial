<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - Garial</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Ridgeben IT Solutions" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link id="colors" href="{{ asset('assets/css/colors/scheme-1.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/custom-swiper-1.css') }}" rel="stylesheet" type="text/css">


</head>

<body class="dark-scheme">
    <x-frontend.navbar />
    <div id="wrapper">

        <a href="#" id="back-to-top"></a>
        @yield('content')

        <x-frontend.footer />
    </div>

    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content">
            <img src="{{ asset('assets/images/logo-white.webp') }}" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>Our Services</h5>
            <ul class="ul-check">
                 <li><a href="{{ route('service.one') }}">Workshop</a></li>
                                     <li><a href="{{ route('service.two') }}">Rent a Car</a></li>
                                     <li><a href="{{ route('service.three') }}">Driving Training</a></li>
                                     <li><a href="{{ route('service.four') }}">Buy and Sell</a></li>
                                     <li><a href="{{ route('service.five') }}">Part Time Driver</a></li>
                                     <li><a href="{{ route('service.six') }}">Contact Us</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-clock-time me-2 op-5"></i>Monday - Friday 08.00 - 18.00</div>
            <div><i class="icofont-location-pin me-2 op-5"></i>4/1, Glass Factory, Bosila Road, Mohammadpur Bus Stand, Mohammadpur, Dhaka, Bangladesh</div>
            <div><i class="icofont-envelope me-2 op-5"></i>support@garial.com</div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>গাড়িয়ালে, আমরা পেশাদার, উচ্চমানের গাড়ির ডিটেইলিং পরিষেবা প্রদানের জন্য নিবেদিত প্রাণ। উন্নত সিরামিক আবরণ
                পর্যন্ত, আমরা আপনার গাড়ির মূল্য সংরক্ষণ এবং উপাদান থেকে রক্ষা করার সময় এটিকে সর্বোত্তম দেখাতে সহায়তা
                করি।</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/designesia.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.js') }}"></script>
    <script src="{{ asset('assets/js/custom-swiper-3.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.twentytwenty.js') }}"></script>

    <script>
        $(window).on("load", function() {
            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
                default_offset_pct: 0.5
            });
            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
                default_offset_pct: 0.5,
                orientation: 'vertical'
            });
        });
    </script>


</body>

</html>
