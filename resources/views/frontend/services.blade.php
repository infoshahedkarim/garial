@extends('layouts.frontend')
@section('title')
    Services
@endsection
@section('content')
    <div class="no-bottom no-top" id="content">

        <div id="top"></div>

        <section class="bg-dark text-light relative jarallax">
            <div class="de-gradient-edge-top"></div>
            <img src="{{ asset('assets/images/background/9.webp') }}" class="jarallax-img" alt="">
            <div class="container relative z-2">
                <div class="row gy-4 gx-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="spacer-double sm-hide"></div>
                        <h1 class="mb-3 wow fadeInUp" data-wow-delay=".2s">Our Service</h1>
                        <div class="border-bottom mb-3"></div>
                        <ul class="crumb wow fadeInUp">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sw-overlay"></div>
        </section>

        <section>
            <div class="container">

                <div class="row g-4">
                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight"
                            data-wow-delay=".0s">
                            <img src="{{ asset('assets/images/services/1.webp') }}" class="hover-scale-1-1 w-100"
                                alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    আপনার গাড়ির মেকানিক্যাল, ইলেকট্রিক্যাল এবং বডি-সংক্রান্ত সব কাজ দক্ষ টেকনিশিয়ানদের
                                    তত্ত্বাবধানে করা হয়।
                                </div>
                                <a class="btn-main fx-slide" href="{{ route('service.one') }}"><span>বিস্তারিত জানুন
                                        </span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">01</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">ওয়ার্কশপ</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight"
                            data-wow-delay=".2s">
                            <img src="{{ asset('assets/images/services/2.webp') }}" class="hover-scale-1-1 w-100"
                                alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    সাশ্রয়ী ভাড়া, নিরাপদ যাত্রা, বিভিন্ন মডেলের নির্ভরযোগ্য গাড়ি—চাহিদা অনুযায়ী সার্ভিস।
                                </div>
                                <a class="btn-main fx-slide" href="{{ route('service.two') }}"><span>বিস্তারিত জানুন
                                        </span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">02</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">রেন্ট এ কার</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight"
                            data-wow-delay=".4s">
                            <img src="{{ asset('assets/images/services/3.webp') }}" class="hover-scale-1-1 w-100"
                                alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    প্রশিক্ষিত ইনস্ট্রাক্টর, নিয়মিত ক্লাস, সম্পূর্ণ ড্রাইভিং শিক্ষা—লেডিজ/জেন্টসের জন্য
                                    আলাদা ব্যাচ।
                                </div>
                                <a class="btn-main fx-slide" href="{{ route('service.three') }}"><span>বিস্তারিত জানুন
                                        </span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">03</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">ড্রাইভিং প্রশিক্ষণ</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight"
                            data-wow-delay=".6s">
                            <img src="{{ asset('assets/images/services/4.webp') }}" class="hover-scale-1-1 w-100"
                                alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    পরীক্ষিত ও যাচাইকৃত ব্যবহৃত গাড়ি। প্রতিটি গাড়ির পূর্ণ রিপোর্ট প্রদান করা হয়।
                                </div>
                                <a class="btn-main fx-slide" href="{{ route('service.four') }}"><span>বিস্তারিত জানুন
                                        </span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">04</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">ব্যবহৃত গাড়ি কেনা/বিক্রি</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight"
                            data-wow-delay=".8s">
                            <img src="{{ asset('assets/images/services/5.webp') }}" class="hover-scale-1-1 w-100"
                                alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    দক্ষ ড্রাইভার নিয়োগ সেবা—ভেরিফাইড, নিয়মিত মনিটরিংসহ।
                                </div>
                                <a class="btn-main fx-slide" href="{{ route('service.five') }}"><span>বিস্তারিত জানুন
                                        </span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">05</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">খণ্ডকালীন ড্রাইভার নিয়োগ</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->

                    <!-- service item begin -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="hover rounded-1 overflow-hidden relative text-light text-center wow fadeInRight"
                            data-wow-delay="1.0s">
                            <img src="{{ asset('assets/images/services/6.webp') }}" class="hover-scale-1-1 w-100"
                                alt="">
                            <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                <div class="mb-3">
                                    আপনার যেকোনো প্রশ্ন বা সার্ভিস বুকিংয়ের জন্য আমাদের সাথে কথা বলুন।
                                </div>
                                <a class="btn-main fx-slide" href="{{ route('service.six') }}"><span>বিস্তারিত জানুন
                                        </span></a>
                            </div>
                            <h3 class="abs fs-32 lh-1 p-4 top-0 start-0">06</h3>
                            <div class="abs bg-blur z-2 top-0 w-100 h-100 hover-op-1"></div>
                            <div class="abs z-2 bottom-0 mb-3 w-100 text-center hover-op-0">
                                <h4 class="mb-3">যোগাযোগ করুন</h4>
                            </div>
                            <div class="gradient-edge-bottom color abs w-100 h-40 bottom-0"></div>
                        </div>
                    </div>
                    <!-- service item end -->
                </div>

            </div>
        </section>

        <section class="bg-color text-light pt-60 pb-50">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-9">
                        <h3 class="mb-0 fs-32">Want your car to shine like new again?</h3>
                    </div>
                    <div class="col-lg-3 text-lg-end">
                        <a class="btn-main fx-slide btn-line" href="#"><span>Make Appointment</span></a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
