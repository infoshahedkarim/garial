@extends('layouts.frontend')

@section('title')
    Home
@endsection

@section('content')
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section class="text-light no-top no-bottom relative overflow-hidden">
            <div class="mh-700">
                <div class="abs w-100 bottom-0 z-2 pb-4">
                    <div class="container">
                        <div class="row g-4 justify-content-between align-items-bottom">
                            <div class="col-lg-8">
                                <div class="sw-text-wrapper">
                                    <div class="subtitle wow fadeInUp">গাড়ির বিস্তারিত পরিষেবা</div>
                                    <h1 class="fs-72 fs-xs-10vw text-uppercase wow fadeInUp">
                                        আলটিমেট <span class="id-color">গাড়ির বিস্তারিত বিবরণ</span> সেবা
                                    </h1>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="spacer-double"></div>
                                <p class="mb-0 wow fadeInUp" data-wow-delay=".2s">
                                    গাড়িয়ালে, আমরা ব্যক্তিগত গাড়ি এবং ব্যবহারের জন্য নির্ভরযোগ্য, দক্ষ বিবরণ সরবরাহ করি, শোরুমের উজ্জ্বলতা পুনরুদ্ধার করি, গাড়ির আয়ু বৃদ্ধি করি এবং আপনার বিনিয়োগ রক্ষা করি।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/slider/1.webp') }})">
                                <div class="gradient-edge-top h-20 op-5"></div>
                                <div class="gradient-edge-bottom h-50"></div>
                                <div class="sw-overlay op-6"></div>
                            </div>
                        </div>

                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/slider/2.webp') }})">
                                <div class="gradient-edge-top h-20 op-5"></div>
                                <div class="gradient-edge-bottom h-50"></div>
                                <div class="sw-overlay op-6"></div>
                            </div>
                        </div>

                        <!-- Slides (example commented)
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url({{ asset('assets/images/slider/3.webp') }})">
                                <div class="gradient-edge-top h-20 op-5"></div>
                                <div class="gradient-edge-bottom h-50"></div>
                                <div class="sw-overlay op-6"></div>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-0">
            <div class="container relative z-1">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="rounded-1 overflow-hidden wow zoomIn">
                                            <img src="{{ asset('assets/images/misc/p1.webp') }}" class="w-100 wow scaleIn" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="row g-4">
                                    <div class="spacer-single sm-hide"></div>
                                    <div class="col-lg-12">
                                        <div class="rounded-1 overflow-hidden wow zoomIn" data-wow-delay=".3s">
                                            <img src="{{ asset('assets/images/misc/p2.webp') }}" class="w-100 wow scaleIn" alt="" data-wow-delay=".3s">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="subtitle wow fadeInUp" data-wow-delay=".2s">About Us</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">ভেতরে ও বাইরে স্থায়ী উজ্জ্বলতা পুনরুদ্ধার করা</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            ShinePro-তে, আমরা প্রতিটি গাড়িকে ভেতরের এবং বাইরের দিক থেকে সর্বোত্তম করে তুলতে আগ্রহী। শোরুম-স্তরের গ্লস পুনরুদ্ধার থেকে শুরু করে অভ্যন্তরীণ অংশ গভীরভাবে পরিষ্কার করা পর্যন্ত, আমাদের বিশেষজ্ঞ দল যত্ন এবং নির্ভুলতার সাথে ত্রুটিহীন ফলাফল প্রদান করে।
                        </p>
                        <a class="btn-main fx-slide wow fadeInUp" href="services.html" data-wow-delay=".6s"><span>Read More</span></a>
                    </div>
                </div>

                <div class="spacer-double"></div>

                <div class="row g-4">
                    <div class="col-md-3 col-6">
                        <div class="de_count text-center wow fadeInRight" data-wow-delay=".0s">
                            <i class="id-color fs-40 d-inline-block mb-3 icofont-briefcase-2"></i>
                            <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="65250" data-speed="3000">0</span>+</h3>
                            Hours of Works
                        </div>
                    </div>

                    <div class="col-md-3 col-6">
                        <div class="de_count text-center wow fadeInRight" data-wow-delay=".2s">
                            <i class="id-color fs-40 d-inline-block mb-3 icofont-thumbs-up"></i>
                            <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="23160" data-speed="3000">0</span>+</h3>
                            Happy Customers
                        </div>
                    </div>

                    <div class="col-md-3 col-6">
                        <div class="de_count text-center wow fadeInRight" data-wow-delay=".4s">
                            <i class="id-color fs-40 d-inline-block mb-3 icofont-users-alt-3"></i>
                            <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="1500" data-speed="3000">0</span>+</h3>
                            Experienced Workers
                        </div>
                    </div>

                    <div class="col-md-3 col-6">
                        <div class="de_count text-center wow fadeInRight" data-wow-delay=".6s">
                            <i class="id-color fs-40 d-inline-block mb-3 icofont-badge"></i>
                            <h3 class="fs-40 mb-0 lh-1-1"><span class="timer" data-to="20" data-speed="3000">0</span>+</h3>
                            Years of Experience
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-80 jarallax" aria-label="section">
            <img src="{{ asset('assets/images/background/3.webp') }}" class="jarallax-img" alt="">
            <div class="gradient-edge-top"></div>
            <div class="sw-overlay"></div>
            <div class="container relative z-2">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-10">
                        <img src="{{ asset('assets/images/misc/c1.webp') }}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark-2">
            <div class="container">
                <div class="row g-4 justify-content-center mb-2">
                    <div class="col-lg-6">
                        <div class="text-center">
                            <div class="subtitle">Welcome to Garial</div>
                            <h2>সেবা</h2>
                            <p>গভীর অভ্যন্তরীণ পরিষ্কার থেকে শুরু করে দীর্ঘস্থায়ী সিরামিক আবরণ পর্যন্ত, আমরা আপনার গাড়িটি নির্ভুলতা, যত্ন এবং নিখুঁততার প্রতিশ্রুতি সহকারে পুনরুদ্ধার এবং সুরক্ষিত করি।</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".0s">
                            <img src="{{ asset('assets/images/services/1.webp') }}" class="hover-scale-1-1 w-100" alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    Gentle yet thorough hand wash using pH-balanced soaps, followed by premium wax to protect your paint and enhance shine. Keeps your car sparkling and protected from the elements.
                                </div>
                                <a class="btn-main fx-slide" href="service-single.html"><span>View Details</span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">01</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">Workshop</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".2s">
                            <img src="{{ asset('assets/images/services/2.webp') }}" class="hover-scale-1-1 w-100" alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    From carpets to headliners, we extract every trace of dirt and odor. Our steam and shampoo treatment leaves your cabin fresh, sanitized, and looking like new inside.
                                </div>
                                <a class="btn-main fx-slide" href="service-single.html"><span>View Details</span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">02</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">Rent a Car</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".4s">
                            <img src="{{ asset('assets/images/services/3.webp') }}" class="hover-scale-1-1 w-100" alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    Buff away swirl marks, scratches, and dullness. We restore clarity and depth with multi-stage machine polishing that revives your paint’s original brilliance.
                                </div>
                                <a class="btn-main fx-slide" href="service-single.html"><span>View Details</span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">03</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">Driving Training</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".6s">
                            <img src="{{ asset('assets/images/services/4.webp') }}" class="hover-scale-1-1 w-100" alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    Add years of protection with hydrophobic ceramic coating. Shields against UV rays, dirt, and scratches—making your car easier to clean and stay glossy longer.
                                </div>
                                <a class="btn-main fx-slide" href="service-single.html"><span>View Details</span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">04</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">Buy And Sell</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay=".8s">
                            <img src="{{ asset('assets/images/services/5.webp') }}" class="hover-scale-1-1 w-100" alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    We degrease and shine your engine bay for a professional finish. It’s not just for aesthetics—engine cleaning helps with resale and easier maintenance checks.
                                </div>
                                <a class="btn-main fx-slide" href="service-single.html"><span>View Details</span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">05</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">Part Time Driver</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight" data-wow-delay="1.0s">
                            <img src="{{ asset('assets/images/services/6.webp') }}" class="hover-scale-1-1 w-100" alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    Cloudy headlights are unsafe and ugly. We sand, polish, and seal them so they shine bright and clear again, improving visibility and your car’s overall look.
                                </div>
                                <a class="btn-main fx-slide" href="service-single.html"><span>View Details</span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">06</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">Contact us</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->
                </div>
            </div>
        </section>

        <section class="bg-dark-2 pt-0" aria-label="section">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-12 wow fadeInUp">
                        <div class="owl-6 no-alpha owl-carousel owl-theme">
                            <img src="{{ asset('assets/images/logo-brands/1.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/2.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/3.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/4.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/5.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/6.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/7.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/8.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/9.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/10.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/11.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/12.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/13.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/14.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/15.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                            <img src="{{ asset('assets/images/logo-brands/16.webp') }}" class="w-100 px-lg-5 p-4" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4 gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle">Real Results</div>
                        <h2>আগে এবং পরে: সম্পূর্ণ স্বয়ংক্রিয় রূপান্তর</h2>
                        <p>
                            সিরামিক আবরণ কতটা নাটকীয় পার্থক্য তৈরি করে তা দেখুন—স্বচ্ছতা, গভীরতা এবং চকচকে পুনরুদ্ধার করে এবং একই সাথে সুরক্ষার একটি টেকসই স্তর যোগ করে। প্রতিটি বিবরণ গুরুত্বপূর্ণ, এবং ফলাফল নিজেই কথা বলে।
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="twentytwenty-container rounded-1">
                            <img src="{{ asset('assets/images/before-after/1b.webp') }}" alt="" class="img-responsive">
                            <img src="{{ asset('assets/images/before-after/1a.webp') }}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark-2">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="owl-carousel owl-theme owl-3-dots wow fadeInUp">
                                <!-- Testimonial 1 -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/1.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">John Smith</div>
                                                    <small>7 December 2024</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"My car looked brand new after their full detail service. Every inch was spotless! Great attention to detail and friendly staff."</p>
                                    </div>
                                </div>

                                <!-- Testimonial 2 -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/2.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Jessica Lee</div>
                                                    <small>12 January 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"Incredible service! The ceramic coating really made my paint pop. Definitely coming back for future detailing needs."</p>
                                    </div>
                                </div>

                                <!-- Testimonial 3 -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/3.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Michael Brown</div>
                                                    <small>2 February 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"Super clean interior and spotless engine bay. The team was fast, professional, and clearly passionate about what they do."</p>
                                    </div>
                                </div>

                                <!-- Testimonial 4 -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/4.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Rachel Adams</div>
                                                    <small>15 March 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"Loved how easy it was to book. The detailers were on time, courteous, and left my SUV shining inside and out."</p>
                                    </div>
                                </div>

                                <!-- Testimonial 5 -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/5.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Liam Carter</div>
                                                    <small>8 April 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"These guys know their craft. Headlight restoration alone made my car look five years newer. Worth every penny!"</p>
                                    </div>
                                </div>

                                <!-- Testimonial 6 -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/6.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Emily Nguyen</div>
                                                    <small>20 May 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"I’ve used a few detailers before, but this place is top-notch. My car feels fresh, smells amazing, and looks flawless!"</p>
                                    </div>
                                </div>

                                <!-- Testimonials 7–12 (examples) -->
                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/7.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Noah Williams</div>
                                                    <small>5 June 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"Professional, quick, and detailed. My black paint looks like a mirror after the ceramic coating. Five stars all day."</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/8.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Ava Johnson</div>
                                                    <small>14 June 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"Interior deep clean was amazing! All the stains and pet hair are gone. The car smells so fresh now. Highly recommended."</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/9.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Lucas Evans</div>
                                                    <small>21 June 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"They removed scratches I thought were permanent. The paint correction gave my car a second life. Amazing results!"</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="bg-dark rounded-1 p-30">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex align-items-center">
                                                <img class="w-40px circle me-3" alt="" src="{{ asset('assets/images/testimonial/10.webp') }}">
                                                <div class="mt-2">
                                                    <div class="text-white fw-bold lh-1">Sophia Martinez</div>
                                                    <small>30 June 2025</small>
                                                </div>
                                            </div>
                                            <img src="{{ asset('assets/images/misc/google-icon.svg') }}" class="w-30px" alt="">
                                        </div>
                                        <div class="de-rating-ext mb-2">
                                            <span class="d-stars">
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                            </span>
                                            <span class="ms-2 text-white">5.0</span>
                                        </div>
                                        <p>"Super impressed with how clean and glossy my car looked after just one session. The team was respectful and efficient."</p>
                                    </div>
                                </div>
                            </div> <!-- /.owl-carousel -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-color text-light pt-60 pb-50">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">আপনার গাড়িটি আবার নতুনের মতো চকচকে করতে চান?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>অ্যাপয়েন্টমেন্ট নিন</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark text-light">
            <div class="container relative z-1">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-6 text-center">
                        <div class="subtitle id-color">Trusted &amp; Affordable</div>
                        <h2>কেন আমাদের গাড়ির ডিটেইলিং বেছে নেবেন?</h2>
                        <p>গভীর অভ্যন্তরীণ পরিষ্কার থেকে শুরু করে দীর্ঘস্থায়ী সিরামিক আবরণ পর্যন্ত, আমরা আপনার গাড়িটি নির্ভুলতা, যত্ন এবং নিখুঁততার প্রতিশ্রুতি সহকারে পুনরুদ্ধার এবং সুরক্ষিত করি।</p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-dark-2 p-40 h-100 rounded-1">
                            <div class="relative wow fadeInUp">
                                <h4>বিশেষজ্ঞ প্রযুক্তিবিদ</h4>
                                <p class="mb-0">আমাদের ডিটেইলাররা হলেন দক্ষ পেশাদার যাদের গাড়ির যত্নে বছরের পর বছর অভিজ্ঞতা রয়েছে।.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="bg-dark-2 p-40 h-100 rounded-1">
                            <div class="relative wow fadeInUp">
                                <h4>তৈরি প্যাকেজ</h4>
                                <p class="mb-0">আপনার গাড়ির অবস্থা এবং আপনার পছন্দ অনুসারে কাস্টমাইজ করা বিশদ বিকল্পগুলি।</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="bg-dark-2 p-40 h-100 rounded-1">
                            <div class="relative wow fadeInUp">
                                <h4>সাশ্রয়ী মূল্য</h4>
                                <p class="mb-0">কোনও লুকানো ফি ছাড়াই প্রতিযোগিতামূলক হারে আপনার বাজেটের সাথে মানসম্পন্ন পরিষেবা।</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="bg-dark-2 p-40 h-100 rounded-1">
                            <div class="relative wow fadeInUp">
                                <h4>আফটার কেয়ার সাপোর্ট</h4>
                                <p class="mb-0">আপনার গাড়িকে তীক্ষ্ণ দেখাতে আমরা পরিষেবা-পরবর্তী টিপস এবং যত্নের পরামর্শ প্রদান করি।</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="relative jarallax mh-500" aria-label="section">
            <div class="gradient-edge-top"></div>
            <div class="gradient-edge-bottom"></div>
            <img src="{{ asset('assets/images/background/3.webp') }}" class="jarallax-img" alt="">
        </section>

        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Everything You Need to Know</div>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Frequently Asked Questions</h2>
                    </div>

                    <div class="col-lg-7">
                        <div class="accordion s2 wow fadeInUp">
                            <div class="accordion-section">
                                <div class="accordion-section-title" data-tab="#accordion-a1">
                                    What is car detailing?
                                </div>
                                <div class="accordion-section-content" id="accordion-a1">
                                    Car detailing is a thorough cleaning, restoration, and finishing of a vehicle to produce a show-quality cleanliness and polish, both inside and out.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a2">
                                    How often should I get my car detailed?
                                </div>
                                <div class="accordion-section-content" id="accordion-a2">
                                    It depends on your usage, but most experts recommend detailing every 3–6 months to maintain your car’s appearance and protect its value.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a3">
                                    What’s included in a full detailing service?
                                </div>
                                <div class="accordion-section-content" id="accordion-a3">
                                    A full detail typically includes exterior wash and polish, interior vacuuming and shampooing, leather conditioning, window cleaning, and engine bay cleaning.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a4">
                                    Will detailing remove scratches and stains?
                                </div>
                                <div class="accordion-section-content" id="accordion-a4">
                                    Light scratches and stains can often be removed through polishing and deep cleaning. Heavier damage may require paint correction or special treatment.
                                </div>

                                <div class="accordion-section-title" data-tab="#accordion-a5">
                                    How long does a detailing session take?
                                </div>
                                <div class="accordion-section-content" id="accordion-a5">
                                    Depending on the vehicle size and service level, a full detailing can take between 2 to 6 hours. We’ll let you know the estimated time during booking.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="bg-dark-2 pt-50 relative no-bottom">
            <div class="container relative z-2">
                <div class="row g-4">
                    <div class="col-lg-8 offset-lg-2 mb-4 text-center">
                        <div class="subtitle id-color wow fadeInUp mb-3">Our Instagram</div>
                        <h2 class="wow fadeInUp">গাড়িয়াল ওয়ার্কশপ</h2>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-md-6">
                        <div class="row g-0">
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/1.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/2.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/3.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/4.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row g-0">
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/5.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/6.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/7.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="d-block hover relative overflow-hidden text-light">
                                    <img src="{{ asset('assets/images/gallery-square/8.webp') }}" class="w-100 hover-scale-1-1" alt="">
                                    <div class="abs abs-centered fs-24 text-white hover-op-0">
                                        <i class="fa-brands fa-instagram"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </section>

    </div>
@endsection
