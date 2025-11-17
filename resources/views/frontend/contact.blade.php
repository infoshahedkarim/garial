@extends('layouts.frontend')
@section('title')
    যোগাযোগ করুন
@endsection
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        {{-- HERO SECTION --}}
        <section class="no-top no-bottom overflow-hidden">
            <div class="container-fluid position-relative half-fluid">
                <div class="container">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-lg-6 position-lg-absolute right-half h-100">
                            {{-- এখানে কাস্টমার সাপোর্ট / কল সেন্টার / চ্যাট সাপোর্ট সম্পর্কিত ইমেজ দিতে পারেন --}}
                            <div class="image" data-bgimage="url({{ asset('assets/images/misc/s1.webp') }}) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                                        Contact Us
                                    </div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                        যে কোনো সময়, যে কোনো প্রশ্নে — আমরা আছি পাশে
                                    </h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                        সার্ভিস বুকিং, তথ্য জানা, সমস্যা সমাধান বা জরুরি ওয়ার্কশপ হেল্প—যে কারণেই হোক,
                                        এক কল, এক মেসেজ বা এক ইমেইলেই আমাদের সাপোর্ট টিম আপনার পাশে। দ্রুত রেসপন্স, পরিষ্কার
                                        গাইডলাইন এবং ঝামেলামুক্ত যোগাযোগ—এটাই আমাদের অঙ্গীকার।
                                    </p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                       href="tel:+8801XXXXXXXXX"><span>এখনই কল করুন</span></a>
                                    <a class="btn-main btn-line mb10 mb-3 wow fadeInUp" data-wow-delay=".7s"
                                       href="mailto:info@example.com"><span>ইমেইল পাঠান</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- WHAT'S INCLUDED / BENEFITS / IDEAL FOR --}}
        <section>
            <div class="container">
                <div class="row g-4">
                    {{-- What's Included --}}
                    <div class="col-md-4">
                        <h3>কী কী অন্তর্ভুক্ত</h3>
                        <ul class="ul-check">
                            <li>ফোন / ইমেইল সাপোর্ট</li>
                            <li>অ্যাপয়েন্টমেন্ট বুকিং</li>
                            <li>সার্ভিস–সম্পর্কিত বিস্তারিত তথ্য</li>
                            <li>অভিযোগ ও ফিডব্যাক সাপোর্ট</li>
                            <li>জরুরি ওয়ার্কশপ হেল্প</li>
                        </ul>
                    </div>

                    {{-- Benefits --}}
                    <div class="col-md-4">
                        <h3>সুবিধাসমূহ</h3>
                        <ul class="ul-check">
                            <li>দ্রুত রেসপন্স ও সহায়তা</li>
                            <li>প্রায় যে কোনো সময় যোগাযোগের সুবিধা</li>
                            <li>আপনার সমস্যার সঠিক ও বাস্তবসম্মত সমাধান</li>
                            <li>সার্ভিস বুকিং আরও সহজ ও ঝামেলামুক্ত</li>
                        </ul>
                    </div>

                    {{-- Ideal For --}}
                    <div class="col-md-4">
                        <h3>যাদের জন্য উপযুক্ত</h3>
                        <ul class="ul-check">
                            <li>নতুন গ্রাহক যারা সার্ভিস সম্পর্কে জানতে চান</li>
                            <li>সার্ভিস বুকিং করতে আগ্রহী গ্রাহক</li>
                            <li>রিপোর্ট বা আপডেট জানতে চান যারা</li>
                            <li>সমস্যা / অভিযোগ জানাতে চান যারা</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- HOW IT WORKS --}}
        <section class="bg-dark-2 jarallax">
            <img src="{{ asset('assets/images/background/1.webp') }}" class="jarallax-img" alt="">
            <div class="sw-overlay"></div>
            <div class="container relative z-2">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="subtitle">Steps</div>
                        <h2>যেভাবে আমরা সাপোর্ট দেই</h2>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-phone-alt fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">১. কল / মেসেজ করুন</h4>
                        <p>ফোন, ইমেইল বা মেসেজের মাধ্যমে আপনার সমস্যা বা প্রয়োজন আমাদের জানান।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">২. বিষয় যাচাই</h4>
                        <p>আমাদের সাপোর্ট টিম আপনার দেওয়া তথ্য বিশ্লেষণ করে মূল বিষয়টি পরিষ্কারভাবে বুঝে নেয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-headset fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৩. সাপোর্ট / সমাধান প্রদান</h4>
                        <p>সম্ভব দ্রুত সময়ের মধ্যে প্রয়োজনীয় সাপোর্ট, নির্দেশনা বা সমাধানের পথ জানিয়ে দেওয়া হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-calendar-check fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৪. বুকিং কনফার্মেশন</h4>
                        <p>সার্ভিসের প্রয়োজন হলে বুকিং কনফার্মেশন, তারিখ ও সময় জানিয়ে দেওয়া হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-route fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৫. পরবর্তী গাইডলাইন</h4>
                        <p>পরবর্তী করণীয়, ফলো-আপ বা ওয়ার্কশপ ভিজিট–সবকিছুর জন্য পরিষ্কার গাইডলাইন দেওয়া হয়।</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- SIMPLE CONTACT BLOCK / CTA --}}
        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <div class="subtitle">Support</div>
                        <h2>যে সমস্যাই হোক, আগে আমাদের সাথে কথা বলুন</h2>
                        <p>
                            আপনার গাড়ি, সার্ভিস, বুকিং, পেমেন্ট বা অন্য কোনো বিষয় নিয়ে প্রশ্ন থাকলে দ্বিধা না করে
                            সরাসরি আমাদের সাথে যোগাযোগ করুন। একবার কথা বললেই বুঝতে পারবেন, সঠিক গাইডলাইন পাওয়া
                            কতটা সহজ হতে পারে।
                        </p>
                        <ul class="ul-check">
                            <li>জরুরিভাবে ওয়ার্কশপ স্লট দরকার?</li>
                            <li>সার্ভিস প্যাকেজ সম্পর্কে জানতে চান?</li>
                            <li>আগের সার্ভিস নিয়ে ফিডব্যাক দিতে চান?</li>
                            <li>কাস্টম সল্যুশন বা কর্পোরেট সাপোর্ট চান?</li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="card bg-dark-2 text-light border-0 p-4 rounded-1">
                            <h4 class="mb-3">দ্রুত যোগাযোগ</h4>
                            <p class="mb-2"><strong>ফোন:</strong> <a href="tel:+8801XXXXXXXXX" class="text-light">+8801XXXXXXXXX</a></p>
                            <p class="mb-2"><strong>ইমেইল:</strong> <a href="mailto:info@example.com" class="text-light">info@example.com</a></p>
                            <p class="mb-3"><strong>ওয়ার্কশপ টাইম:</strong> সকাল ৯টা – রাত ১০টা</p>
                            <a class="btn-main fx-slide w-100" href="{{ route('service.six') ?? '#' }}">
                                <span>অনলাইন ফর্ম পূরণ করুন</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FINAL CTA --}}
        <section class="bg-color text-light pt-60 pb-50">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">আপনার প্রশ্ন আছে? এখনই আমাদের সাথে যোগাযোগ করুন।</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="tel:+8801XXXXXXXXX"><span>এখনই কল করুন</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
@endsection
