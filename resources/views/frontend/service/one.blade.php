@extends('layouts.frontend')
@section('title')
    ওয়ার্কশপ সার্ভিস
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
                            <div class="image" data-bgimage="url({{ asset('assets/images/misc/s1.webp') }}) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">ওয়ার্কশপ সার্ভিস</div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">আপনার গাড়ির জন্য সম্পূর্ণ ওয়ার্কশপ সমাধান</h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                        গাড়ির ইঞ্জিন, ব্রেক, সাসপেনশন থেকে শুরু করে ইলেকট্রিক্যাল ও বডি রিপেয়ার—সব কিছু এক জায়গায়
                                        প্রফেশনাল ওয়ার্কশপ সার্ভিসের মাধ্যমে করা হয়। দক্ষ টেকনিশিয়ান ও আধুনিক মেশিনারিজ ব্যবহার করে
                                        আমরা আপনার গাড়িকে রাখি নিরাপদ, নির্ভরযোগ্য ও লং-টার্ম পারফরম্যান্স-রেডি।
                                    </p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                       href="contact.html"><span>ওয়ার্কশপ বুক করুন</span></a>
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
                            <li>সম্পর্ণূর্ণমে কানি ক্যাল চে কআপ</li>
                            <li>ইঞ্জি ন টিউনি ং ও সার্ভি সি ং</li>
                            <li>ব্রে ক, সাসপে নশন ও স্টি য়ারি ং পরীক্ষা</li>
                            <li>ইলে কট্রি ক্যাল সমস্যা শনাক্তকরণ</li>
                            <li>বডি ও পে ইন্ট রি পে য়ার</li>
                            <li>ডায়াগনস্টি ক স্ক্যানি ং (OBD)</li>
                            <li>অয়ে ল পরি পরিবর্তন ও প্রি মি য়াম ফি ল্টার রি প্লে সমে ন্ট</li>
                            <li>এ.সি সার্ভি সি ং ও গ্যাস রি ফি ল</li>
                            <li>টায়ার ব্যালে ন্সি ং, র োটে শন ও রি পে য়ার</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>সুবিধাসমূহ</h3>
                        <ul class="ul-check">
                            <li>গাড়ি র দীর্ঘস্থায়ী পারফরম্যান্স নি শ্চি ত</li>
                            <li>ব্রে কডাউন হওয়ার ঝুঁকি কমে যায়</li>
                            <li>ফুয়ে ল ইফি শি য়ে ন্সি বদ্ধিৃদ্ধি</li>
                            <li>বায়ারদে র কাছে রি সে ল ভ্যালুবাড়ে</li>
                            <li>দক্ষ টে কনি শি য়ানে র নি খুতঁ পরি দর্শন</li>
                            <li>উচ্চমানে র যন্ত্রাংশ ও মে শি ন ব্যবহৃত হয়</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>যাদের জন্য উপযুক্ত</h3>
                        <ul class="ul-check">
                            <li>দীর্ঘদি ন সার্ভি স না করা গাড়ি</li>
                            <li>ইঞ্জি ন বা ব্রে ক সমস্যাযুক্ত গাড়ি</li>
                            <li>দীর্ঘ ভ্রমণে র আগে /পরে গাড়ি</li>
                            <li>ব্যবহৃত গাড়ি কে নার আগে চে কআপ</li>
                            <li>প্রতি দি নে র ব্যবহারে র গাড়ি</li>
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
                        <h2>যে ভাবে কাজ করি</h2>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">১. গাড়ি র প্রাথমি ক ডায়াগনস্টি ক</h4>
                        <p>স্ক্যানি ং ও ভি জ্যুয়াল পরীক্ষা মাধ্যমে গাড়ি র প্রাথমি ক ডায়াগনস্টি ক করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-file-invoice-dollar fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">২. সমস্যার রি প োর্ট ও খরচ জানি য়ে অনমুতি</h4>
                        <p>সমস্যার রি প োর্ট ও খরচ জানি য়ে কাস্টমারে র অনমুতি নে ওয়া হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-tools fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৩. কাজ শুরুর আগে পার্টস ও সময় নি শ্চি ত</h4>
                        <p>যে সব পার্টস লাগবে ও কত সময় লাগবে তা আগে থেকেই নি শ্চি ত করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-user-cog fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৪. টে কনি শি য়ানে র কাজে র আপডে ট</h4>
                        <p>কাজ চলাকালে টে কনি শি য়ানে র পক্ষ থেকে কাজে র আপডে ট দেওয়া হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-car-side fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৫. টে স্ট ড্রাইভ ও ফাইনাল চে কি ং</h4>
                        <p>সব কাজ শেষে টে স্ট ড্রাইভ ও ফাইনাল চে কি ং করা হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-handshake fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৬. ডে লি ভারি ও পরবর্তী ফল ো-আপ সহায়তা</h4>
                        <p>গাড়ি ডে লি ভারি শেষে প্রয়োজন হলে পরবর্তী ফল ো-আপ সহায়তা দেওয়া হয়।</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Before & After + Problems We Fix --}}
        <section>
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-lg-6">
                        <div class="subtitle">Real Results</div>
                        <h2>আগে এবং পরে</h2>

                        <p>
                            <strong>আগে :</strong>
                            শব্দ, নড়াচড়া, পি ক-আপ কমে যাওয়া, ইঞ্জি ন রাফ লাগা
                        </p>
                        <p>
                            <strong>পরে :</strong>
                            স্মুথ ড্রাইভ, ভাল ো মাইলে জ, কম্পনহীন ইঞ্জি ন, শক্তি শালী পারফরম্যান্স
                        </p>

                        <h3 class="mt-4">যে সকল সমস্যাগুল ো সমাধান করে থাকি</h3>
                        <ul class="ul-check">
                            <li>ইঞ্জি ন মি সফায়ার</li>
                            <li>ব্রে ক শব্দ</li>
                            <li>এ.সি ড্রপ</li>
                            <li>ওভারহি ট</li>
                            <li>সাসপে নশন নকি ং</li>
                            <li>ব্যাটারি বা অল্টারনে টর সমস্যা</li>
                            <li>ইলে কট্রি ক্যাল শর্ট</li>
                        </ul>
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

        {{-- CTA --}}
        <section class="bg-color text-light pt-60 pb-50">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">আপনার গাড়িকে আবার নতুনের মতো কন্ডিশনে নিতে চান?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>অ্যাপয়েন্টমেন্ট নিন</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
@endsection
