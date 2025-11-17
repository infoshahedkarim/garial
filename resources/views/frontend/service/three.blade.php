@extends('layouts.frontend')
@section('title')
    ড্রাইভিং প্রশিক্ষণ
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
                            {{-- এখানে ড্রাইভিং ট্রেনিং সম্পর্কিত ইমেজ রাখতে পারেন --}}
                            <div class="image" data-bgimage="url({{ asset('assets/images/misc/s1.webp') }}) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                                        Driving Training
                                    </div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                        আত্মবিশ্বাসী ও নিরাপদ ড্রাইভার তৈরির সিস্টেমেটিক প্রশিক্ষণ
                                    </h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                        নতুন অথবা অভিজ্ঞ—সব ধরনের শিক্ষার্থীর জন্য সাজানো আমাদের ড্রাইভিং প্রশিক্ষণ।
                                        বেসিক থেকে অ্যাডভান্স কোর্স, ট্রাফিক রুলস, রোড সেন্স, প্র্যাকটিক্যাল ড্রাইভিং ও
                                        লাইসেন্স গাইডেন্স–সবকিছুই একই প্ল্যাটফর্মে। লেডিজ ও জেন্টসের জন্য আলাদা ব্যাচ,
                                        অভিজ্ঞ ট্রেইনার এবং নিয়মিত প্র্যাকটিসের মাধ্যমে আমরা আপনাকে তৈরি করি
                                        আত্মবিশ্বাসী ও দায়িত্বশীল ড্রাইভার হিসেবে।
                                    </p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                       href="contact.html"><span>এখনই ট্রেনিং বুক করুন</span></a>
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
                    <div class="col-md-4">
                        <h3>কী কী অন্তর্ভুক্ত</h3>
                        <ul class="ul-check">
                            <li>বেসিক থেকে অ্যাডভান্স ড্রাইভিং কোর্স</li>
                            <li>ট্রাফিক রুলস ও রোড সেন্স শেখানো</li>
                            <li>রিভার্স, পার্কিং, হিল-স্টার্ট প্র্যাকটিস</li>
                            <li>প্র্যাকটিক্যাল + থিওরি ক্লাস</li>
                            <li>লাইসেন্স গাইডেন্স ও প্রস্তুতি</li>
                            <li>লেডিজ ও জেন্টসের জন্য আলাদা ব্যাচ</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>সুবিধাসমূহ</h3>
                        <ul class="ul-check">
                            <li>ড্রাইভিংয়ে আত্মবিশ্বাস বৃদ্ধি</li>
                            <li>নিরাপদ ড্রাইভিং শেখার সুযোগ</li>
                            <li>লাইসেন্স পরীক্ষায় সহজে উত্তীর্ণ হতে সহায়তা</li>
                            <li>বাস্তব পরিস্থিতি সামলানোর দক্ষতা</li>
                            <li>পেশাদার ট্রেইনার দ্বারা নিয়মিত প্রশিক্ষণ</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>যাদের জন্য উপযুক্ত</h3>
                        <ul class="ul-check">
                            <li>নতুন শিক্ষার্থী</li>
                            <li>লেডিজ সেফ-ড্রাইভিং লার্নার</li>
                            <li>যারা নিজে গাড়ি চালাতে চান</li>
                            <li>লাইসেন্স পরীক্ষার প্রস্তুতিমূলক শিক্ষার্থী</li>
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
                        <div class="subtitle">ধাপসমূহ</div>
                        <h2>যেভাবে প্রশিক্ষণ পরিচালিত হয়</h2>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-user-edit fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">১. রেজিস্ট্রেশন</h4>
                        <p>শিক্ষার্থী তথ্য, পছন্দের ব্যাচ ও সময়সূচি অনুযায়ী রেজিস্ট্রেশন সম্পন্ন করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-road fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">২. প্রি-অ্যাসেসমেন্ট / রোড টেস্ট</h4>
                        <p>শিক্ষার্থীর বর্তমান দক্ষতা যাচাই করে উপযুক্ত লেভেলের কোর্স নির্ধারণ করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-book-open fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৩. কোর্স বিভাজন</h4>
                        <p>বেসিক, ইন্টারমিডিয়েট ও অ্যাডভান্স—ধাপে ধাপে থিওরি ও প্র্যাকটিক্যাল ক্লাস সাজানো হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-car-side fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৪. নিয়মিত মাঠে প্র্যাকটিস</h4>
                        <p>নির্দিষ্ট ট্র্যাক ও রাস্তায় নিয়মিত ড্রাইভিং প্র্যাকটিসের মাধ্যমে হাতে-কলমে শেখানো হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-certificate fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৫. কোর্স শেষে সার্টিফিকেট</h4>
                        <p>কোর্স সফলভাবে শেষ করলে সার্টিফিকেট প্রদান ও লাইসেন্স পরীক্ষার গাইডলাইন দেওয়া হয়।</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- BEFORE & AFTER --}}
        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle">Real Results</div>
                        <h2>আগে এবং পরে</h2>

                        <p>
                            <strong>আগে :</strong>
                            ভয়, দ্বিধা, অনিশ্চয়তা—স্টিয়ারিং হাতে নিলে কনফিডেন্স কম অনুভব করা।
                        </p>
                        <p>
                            <strong>পরে :</strong>
                            আত্মবিশ্বাস + দক্ষতা + নিরাপদ ড্রাইভিং—নিয়ন্ত্রণে গাড়ি, নিয়ন্ত্রণে নিজে।
                        </p>
                        <p>
                            পরিকল্পিত কোর্স, এক্সপার্ট ট্রেইনার এবং নিয়মিত প্র্যাকটিসের মাধ্যমে একজন শিক্ষার্থী
                            ধীরে ধীরে ভয়ের জায়গা থেকে বেরিয়ে এসে হন একজন সচেতন ও দায়িত্বশীল ড্রাইভার।
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="twentytwenty-container rounded-1">
                            {{-- এখানে চাইলে আগে/পরে টাইপ ভিজ্যুয়াল ইমেজ দিতে পারেন --}}
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
                        <h3 class="mb-0 fs-32">নিজে নিরাপদভাবে গাড়ি চালাতে শিখতে প্রস্তুত?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>ড্রাইভিং কোর্সে ভর্তি হন</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
@endsection
