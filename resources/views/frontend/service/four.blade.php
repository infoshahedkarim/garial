@extends('layouts.frontend')
@section('title')
    ব্যবহৃত গাড়ি কেনা/বেচা
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
                            {{-- এখানে ব্যবহৃত গাড়ি শোরুম / চাবি হ্যান্ডওভার টাইপ ইমেজ দিতে পারেন --}}
                            <div class="image" data-bgimage="url({{ asset('assets/images/misc/s1.webp') }}) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">
                                        Used Car Buy & Sell
                                    </div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                                        ভেরিফাইড ব্যবহৃত গাড়ি কেনা–বেচার নিরাপদ সমাধান
                                    </h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">
                                        প্রতারণামুক্ত, ভেরিফাই করা ব্যবহৃত গাড়ি এখন একদম প্রফেশনাল প্রসেসের মাধ্যমে।
                                        ইঞ্জিন, বডি, সাসপেনশন থেকে শুরু করে ওডোমিটার ভেরিফিকেশন, লোন ও ডকুমেন্টেশন—
                                        সবকিছু আমরা নিশ্চিত করি যাচাই-বাছাই করে, যাতে আপনি পান আপনার বাজেট অনুযায়ী
                                        নিরাপদ ও টেনশন–ফ্রি গাড়ি।
                                    </p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                       href="contact.html"><span>কনসাল্টেশন বুক করুন</span></a>
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
                            <li>যাচাই করা ব্যবহৃত গাড়ি</li>
                            <li>সম্পূর্ণ কন্ডিশন রিপোর্ট</li>
                            <li>ইঞ্জিন / বডি / সাসপেনশন চেক</li>
                            <li>ওডোমিটার ভেরিফিকেশন</li>
                            <li>লোন ও পেপারস সহায়তা</li>
                            <li>গাড়ি ট্রান্সফার সার্ভিস</li>
                        </ul>
                    </div>

                    {{-- Benefits --}}
                    <div class="col-md-4">
                        <h3>সুবিধাসমূহ</h3>
                        <ul class="ul-check">
                            <li>প্রতারণামুক্ত কেনা–বেচা প্রক্রিয়া</li>
                            <li>প্রতিটি গাড়ির সম্পূর্ণ চেকআপ রিপোর্ট</li>
                            <li>সাশ্রয়ী দামে ভালো কন্ডিশনের গাড়ি</li>
                            <li>সব ডকুমেন্টেশন আমাদের টিম দ্বারা পরিচালিত</li>
                            <li>রিসেল ভ্যালু–সংক্রান্ত প্রফেশনাল অ্যাডভাইস</li>
                        </ul>
                    </div>

                    {{-- Ideal For --}}
                    <div class="col-md-4">
                        <h3>যাদের জন্য উপযুক্ত</h3>
                        <ul class="ul-check">
                            <li>প্রথমবার গাড়ি কিনতে চান যারা</li>
                            <li>পরিবারের জন্য সেকেন্ড কার খুঁজছেন</li>
                            <li>পোর্টফোলিও / বিজনেসের জন্য গাড়িতে বিনিয়োগকারীরা</li>
                            <li>বাজেট–ফ্রেন্ডলি কিন্তু ভেরিফাইড গাড়ি চান যারা</li>
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
                            <i class="fas fa-comments fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">১. বাজেট ও মডেল জানান</h4>
                        <p>আপনার বাজেট, পছন্দের মডেল, ব্যবহার–ধরন ও অন্যান্য প্রয়োজনীয়তা আমাদের জানিয়ে দিন।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-list-ul fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">২. গাড়ি শর্টলিস্ট করি</h4>
                        <p>আমরা মার্কেট থেকে আপনার ক্রাইটেরিয়া অনুযায়ী ভেরিফাইড কিছু গাড়ি শর্টলিস্ট করি।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-search-plus fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৩. ফিজিক্যাল ইনস্পেকশন</h4>
                        <p>ইঞ্জিন, বডি, সাসপেনশন, ইন্টেরিয়র, ওডোমিটারসহ সম্পূর্ণ ফিজিক্যাল ইনস্পেকশন করানো হয়।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-handshake fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৪. দর–কষাকষি ও ফাইনালাইজ</h4>
                        <p>আপনার পক্ষে আমরা দর–কষাকষি করে একটি ফেয়ার প্রাইসে গাড়ি ফাইনালাইজ করতে সহায়তা করি।</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-file-signature fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">৫. ডকুমেন্টেশন ও ডেলিভারি</h4>
                        <p>নাম ট্রান্সফার, লোন পেপারস, রেজিস্ট্রেশনসহ সব ডকুমেন্টেশন সম্পন্ন করে গাড়ি ডেলিভারি।</p>
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
                            ঝুঁকিপূর্ণ গাড়ি কেনার ভয়, ডকুমেন্ট নিয়ে দুশ্চিন্তা, প্রতারণার আশঙ্কা।
                        </p>
                        <p>
                            <strong>পরে :</strong>
                            ভেরিফাইড, চেকড এবং নিরাপদ গাড়ি + ক্লিয়ার ডকুমেন্টেশন + মানসিক শান্তি।
                        </p>
                        <p>
                            আমাদের গাড়ি সিলেকশন, ইনস্পেকশন এবং ডকুমেন্টেশন–প্রসেসের মাধ্যমে আপনি একটি
                            কনফিডেন্ট ডিসিশন নিতে পারেন—যাতে আপনার টাকা, সময় ও মানসিক শান্তি–সবই সেভ থাকে।
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="twentytwenty-container rounded-1">
                            {{-- চাইলে এখানে before: random used car / after: polished, verified car এর ভিজ্যুয়াল রাখতে পারেন --}}
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
                        <h3 class="mb-0 fs-32">নিরাপদ ব্যবহৃত গাড়ি কিনতে চান? আগে আমাদের সঙ্গে কথা বলুন।</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>Used Car কনসাল্টেশন নিন</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- content end -->
@endsection
