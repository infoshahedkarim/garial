@extends('layouts.frontend')
@section('title')
    রেন্ট এ কার
@endsection
@section('content')
    <!-- content begin -->
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section class="no-top no-bottom overflow-hidden">
            <div class="container-fluid position-relative half-fluid">
                <div class="container">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-lg-6 position-lg-absolute right-half h-100">
                            {{-- চাইলে এখানে রেন্ট এ কার সম্পর্কিত ইমেজ ব্যবহার করতে পারেন --}}
                            <div class="image" data-bgimage="url({{ asset('assets/images/misc/s1.webp') }}) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                                        Rent a Car Service
                                    </div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                        নিরাপদ, আরামদায়ক ও ঝামেলামুক্ত ভ্রমণের গ্যারান্টি
                                    </h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                        ঘণ্টা, দিন বা মাসভিত্তিক সাশ্রয়ী ভাড়ায় বিভিন্ন ধরনের সেডান, SUV, হাইএস ও নোহা গাড়ি
                                        উপলব্ধ। ড্রাইভারসহ অথবা ড্রাইভার ছাড়া—আপনার প্রয়োজন অনুযায়ী কাস্টমাইজড সার্ভিস, পরিষ্কার
                                        ফুয়েল ও টোল পলিসি এবং ২৪/৭ সাপোর্টের মাধ্যমে আমরা নিশ্চিত করি নিরাপদ ও সময়মতো যাত্রা।
                                    </p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                       href="contact.html"><span>এখনই গাড়ি বুক করুন</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- What's Included / Benefits / Ideal For --}}
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <h3>কী কী অন্তর্ভুক্ত</h3>
                        <ul class="ul-check">
                            <li>ঘণ্টা / দিন / মাস ভিত্তিক ভাড়া</li>
                            <li>ড্রাইভারসহ / ড্রাইভার ছাড়া সার্ভিস</li>
                            <li>বিভিন্ন সেডান, SUV, হাইএস, নোহা অপশন</li>
                            <li>ফুয়েল ও টোল পলিসি পরিষ্কারভাবে উল্লেখ</li>
                            <li>২৪/৭ সাপোর্ট</li>
                            <li>যাত্রার আগে সম্পূর্ণ গাড়ি চেকআপ</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>সুবিধাসমূহ</h3>
                        <ul class="ul-check">
                            <li>নিরাপদ ও আরামদায়ক যাত্রা</li>
                            <li>দ্রুত ডেলিভারি ও সহজ বুকিং</li>
                            <li>অভিজ্ঞ ড্রাইভার (যদি চান)</li>
                            <li>সাশ্রয়ী ভাড়া প্যাকেজ</li>
                            <li>ঝামেলাহীন ভ্রমণের নিশ্চয়তা</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>যাদের জন্য উপযুক্ত</h3>
                        <ul class="ul-check">
                            <li>অফিস ট্রিপ</li>
                            <li>এয়ারপোর্ট পিকআপ / ড্রপ</li>
                            <li>বিয়ে ও পারিবারিক অনুষ্ঠান</li>
                            <li>ট্যুর ও ভ্রমণ</li>
                            <li>দৈনিক অফিস যাতায়াত</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- How It Works --}}
        <section class="bg-dark-2 jarallax">
            <img src="{{ asset('assets/images/background/1.webp') }}" class="jarallax-img" alt="">
            <div class="sw-overlay"></div>
            <div class="container relative z-2">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="subtitle">ধাপসমূহ</div>
                        <h2>যেভাবে কাজ করি</h2>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-car-side fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">গাড়ির ধরন নির্বাচন</h4>
                        <p>আপনার প্রয়োজন অনুযায়ী সেডান, SUV, হাইএস বা নোহা থেকে গাড়ি নির্বাচন করুন।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-calendar-check fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">সময় ও তারিখ অনুযায়ী বুকিং</h4>
                        <p>ঘণ্টা / দিন / মাস ভিত্তিতে নির্ধারিত সময় ও তারিখ অনুযায়ী বুকিং কনফার্ম করুন।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-money-check-alt fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">অগ্রিম পেমেন্ট (প্রয়োজন হলে)</h4>
                        <p>প্রয়োজনে নিরাপদ পদ্ধতিতে অগ্রিম পেমেন্ট করে বুকিং ফাইনাল করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-route fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">ডেলিভারি, যাত্রা ও রিটার্ন</h4>
                        <p>নির্ধারিত সময়ে গাড়ি পৌঁছে দেওয়া, যাত্রা সম্পন্ন এবং শেষে নিরাপদভাবে গাড়ি রিটার্ন।</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Before & After --}}
        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle">Real Results</div>
                        <h2>আগে এবং পরে</h2>
                        <p>
                            <strong>আগে :</strong>
                            যাতায়াতে অসুবিধা, সময় নষ্ট, হঠাৎ গাড়ি না পাওয়ার ঝুঁকি।
                        </p>
                        <p>
                            <strong>পরে :</strong>
                            প্রিমিয়াম গাড়ি + সময়মতো পৌঁছানো + ঝামেলামুক্ত আরামদায়ক যাত্রা।
                        </p>
                        <p>
                            অফিসিয়াল ট্রিপ থেকে পারিবারিক অনুষ্ঠান—সব ধরনের ভ্রমণে নির্ভরযোগ্য রেন্ট এ কার সার্ভিস
                            আপনার পরিকল্পনাকে করে তোলে অনেক সহজ ও নিশ্চিন্ত।
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="twentytwenty-container rounded-1">
                            {{-- চাইলে এখানে Before/After টাইপ কোনো রেন্ট এ কার ছবি ব্যবহার করতে পারেন --}}
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
                        <h3 class="mb-0 fs-32">পরবর্তী যাত্রার জন্য এখনই আপনার পছন্দের গাড়ি বুক করবেন?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>এখনই বুকিং করুন</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
@endsection

