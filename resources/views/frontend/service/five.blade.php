@extends('layouts.frontend')
@section('title')
    খণ্ডকালীন ড্রাইভার নিয়োগ
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
                            {{-- এখানে ড্রাইভার / স্টিয়ারিং / অফিস রাইড টাইপ ইমেজ দিতে পারেন --}}
                            <div class="image" data-bgimage="url({{ asset('assets/images/misc/s1.webp') }}) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                                        Part-time Driver Hiring
                                    </div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                        ভেরিফাইড ও অভিজ্ঞ খণ্ডকালীন ড্রাইভার, যখনই প্রয়োজন
                                    </h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                        বিয়ে, পারিবারিক অনুষ্ঠান, অফিস ট্রিপ, নাইট শিফট বা জরুরি পরিস্থিতি—যেকোনো সময়ের জন্য
                                        ভেরিফাইড ও অভিজ্ঞ খণ্ডকালীন ড্রাইভার সরবরাহ করি আমরা। পুলিশ ভেরিফিকেশন, সঠিক আইডি,
                                        ভদ্র আচরণ ও সময়ানুবর্তিতার মাধ্যমে আপনার যাত্রাকে করি আরও নিরাপদ ও ঝামেলামুক্ত।
                                    </p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                       href="contact.html"><span>এখনই ড্রাইভার রিকুয়েস্ট করুন</span></a>
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
                            <li>ভেরিফাইড ও অভিজ্ঞ ড্রাইভার</li>
                            <li>দৈনিক / ঘণ্টাভিত্তিক সার্ভিস</li>
                            <li>পুলিশ ভেরিফিকেশন ও বৈধ আইডি</li>
                            <li>অ্যাপ/অফিস রাইড, বিয়ে ও ইভেন্ট সাপোর্ট</li>
                            <li>লেডিজ–ফ্রেন্ডলি সার্ভিস</li>
                        </ul>
                    </div>

                    {{-- Benefits --}}
                    <div class="col-md-4">
                        <h3>সুবিধাসমূহ</h3>
                        <ul class="ul-check">
                            <li>ব্যক্তিগত ও পারিবারিক নিরাপত্তার নিশ্চয়তা</li>
                            <li>নির্ধারিত সময়ে গাড়ি ও ড্রাইভার উপস্থিতি</li>
                            <li>প্রশিক্ষিত ও আচরণবিধি–সম্মত ড্রাইভার</li>
                            <li>দৈনিক যাতায়াত আরও সহজ ও ঝামেলামুক্ত</li>
                        </ul>
                    </div>

                    {{-- Ideal For --}}
                    <div class="col-md-4">
                        <h3>যাদের জন্য উপযুক্ত</h3>
                        <ul class="ul-check">
                            <li>পারিবারিক অনুষ্ঠান</li>
                            <li>অফিস ট্রিপ</li>
                            <li>রাতের শিফটে যাতায়াত</li>
                            <li>জরুরি ভিত্তিতে ড্রাইভারের প্রয়োজন হলে</li>
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
                        <h2>যেভাবে কাজ করি</h2>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">১. প্রয়োজন ও সময় জানান</h4>
                        <p>কোন সময়, কত ঘণ্টা, কোথা থেকে কোথায়—আপনার প্রয়োজন অনুযায়ী ডিটেইলস আমাদের জানান।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-user-tie fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">২. ড্রাইভার অ্যাসাইন</h4>
                        <p>আমাদের ভেরিফাইড লিস্ট থেকে আপনার প্রয়োজনের সাথে মানানসই ড্রাইভার অ্যাসাইন করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-id-card-alt fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৩. পরিচয় যাচাই</h4>
                        <p>ড্রাইভারের নাম, ছবি, আইডি ও মৌলিক ডিটেইলস আপনাকে শেয়ার করা হয়, যাতে আপনি নিশ্চিন্ত থাকেন।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-route fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৪. সার্ভিস ডেলিভারি</h4>
                        <p>নির্ধারিত সময়ে ড্রাইভার আপনার লোকেশনে পৌঁছে গাড়ি চালানোর দায়িত্ব নেন।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-star-half-alt fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৫. শেষে ফিডব্যাক ও রেটিং</h4>
                        <p>সার্ভিস শেষে আপনার ফিডব্যাক ও রেটিং নিয়ে আমাদের ড্রাইভার পুল আরও উন্নত করা হয়।</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- OPTIONAL BEFORE & AFTER BLOCK (SHORT) --}}
        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle">Experience</div>
                        <h2>আগে এবং পরে</h2>

                        <p>
                            <strong>আগে :</strong>
                            হঠাৎ ড্রাইভার না পাওয়া, নিরাপত্তা নিয়ে দুশ্চিন্তা, দেরিতে পৌঁছানোর ঝুঁকি।
                        </p>
                        <p>
                            <strong>পরে :</strong>
                            ভেরিফাইড ড্রাইভার + সময়মতো সার্ভিস + নিরাপদ ও আরামদায়ক যাত্রা।
                        </p>
                        <p>
                            আমাদের খণ্ডকালীন ড্রাইভার সার্ভিস ব্যবহার করলে আপনার পারিবারিক, অফিসিয়াল বা জরুরি
                            যাতায়াত হয় অনেক বেশি পরিকল্পিত, নিরাপদ ও স্ট্রেস–ফ্রি।
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="twentytwenty-container rounded-1">
                            {{-- চাইলে আগে/পরে ভিজ্যুয়াল টাইপ ছবি ব্যবহার করতে পারেন --}}
                            <img src="{{ asset('assets/images/before-after/1b.webp') }}" alt="" class="img-responsive">
                            <img src="{{ asset('assets/images/before-after/1a.webp') }}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="bg-color text-light pt-60 pb-50">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">আজকের রাতের জন্যই ড্রাইভার লাগবে? আমরা আছি পাশে।</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>ড্রাইভার বুক করুন</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
@endsection
