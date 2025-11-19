 <footer>
     <div class="container">
         <div class="row gx-5">
             <div class="col-lg-4 col-sm-6">
                 <img src="{{asset('assets/images/logo-white.webp')}}" class="logo-footer" alt="">
                 <div class="spacer-20"></div>
                 <p>গারিয়ালে, আমরা পেশাদার, উচ্চমানের গাড়ির ডিটেইলিং পরিষেবা প্রদানের জন্য নিবেদিত প্রাণ। উন্নত সিরামিক
                     আবরণ পর্যন্ত, আমরা আপনার গাড়ির মূল্য সংরক্ষণ এবং উপাদান থেকে রক্ষা করার সময় এটিকে সর্বোত্তম
                     দেখাতে সহায়তা করি।</p>

                 <div class="social-icons mb-sm-30">
                     <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                     <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                     <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                     <a href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a href="#"><i class="fa-brands fa-youtube"></i></a>
                 </div>
             </div>

             <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                 <div class="row">
                     <div class="col-lg-5">
                         <div class="widget">
                             <h5>Important</h5>
                             <ul>
                                 <li><a class="menu-item" href="{{ route('home') }}">Home</a>
                             </li>
                             <li><a class="menu-item" href="{{ route('service') }}">Services</a>

                             </li>
                             <li><a class="menu-item" href="{{ route('service') }}">Blog</a></li>
                             <li><a class="menu-item" href="{{ route('service') }}">Workshop</a>
                             </li>
                             </ul>
                         </div>
                     </div>

                     <div class="col-lg-7">
                         <div class="widget">
                             <h5>Our Services</h5>
                             <ul>
                                     <li><a href="{{ route('service.one') }}">Workshop</a></li>
                                     <li><a href="{{ route('service.two') }}">Rent a Car</a></li>
                                     <li><a href="{{ route('service.three') }}">Driving Training</a></li>
                                     <li><a href="{{ route('service.four') }}">Buy and Sell</a></li>
                                     <li><a href="{{ route('service.five') }}">Part Time Driver</a></li>
                                     <li><a href="{{ route('service.six') }}">Contact Us</a></li>
                                 </ul>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                 <div class="widget">
                     <h5>Contact Us</h5>

                     <div class="fw-bold text-white">
                         <i class="icofont-location-pin me-2 id-color"></i>Head Office
                     </div>
                     4/1, Glass Factory, Bosila Road, Mohammadpur Bus Stand, Mohammadpur, Dhaka, Bangladesh

                     <div class="spacer-20"></div>

                     <div class="fw-bold text-white">
                         <i class="icofont-phone me-2 id-color"></i>Call Us
                     </div>
                     +880 1715-949457

                     <div class="spacer-20"></div>

                     <div class="fw-bold text-white">
                         <i class="icofont-envelope me-2 id-color"></i>Email Us
                     </div>
                     garial.net@gmail.com
                 </div>
             </div>
         </div>
     </div>

     <div class="subfooter">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="de-flex">
                         <div class="de-flex-col">
                             &copy; 2025 - Garial by Ridgeben IT Solutions
                         </div>
                         {{-- <ul class="menu-simple">
                             <li><a href="#">Terms &amp; Conditions</a></li>
                             <li><a href="#">Privacy Policy</a></li>
                         </ul> --}}
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
