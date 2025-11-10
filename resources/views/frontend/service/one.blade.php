@extends('layouts.frontend')
@section('title')
    Home Page
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
                            <div class="image" data-bgimage="url(images/misc/s1.webp) center"></div>
                        </div>
                        <!-- Text -->
                        <div class="col-lg-6">
                            <div class="pt-lg-5 mt-lg-5 me-lg-3">
                                <div class="py-5 mt-5 mb-3 me-lg-3">
                                    <div class="subtitle id-color wow fadeInUp" data-wow-delay=".0s">Ceramic Coating
                                        Protection</div>
                                    <h1 class="wow fadeInUp" data-wow-delay=".2s">Long-lasting protection and gloss</h1>
                                    <p class="col-lg-10 wow fadeInUp" data-wow-delay=".4s">Ceramic Coating Protection is the
                                        ultimate solution for preserving your vehicle’s paintwork. This high-performance
                                        coating bonds with your car’s surface, creating a hydrophobic layer that repels
                                        water, dirt, and environmental contaminants. It enhances gloss, resists oxidation,
                                        and provides long-term protection that far outperforms traditional wax.</p>

                                    <a class="btn-main mb10 mb-3 wow fadeInUp" data-wow-delay=".6s"
                                        href="contact.html"><span>Book Detailing</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4">
                        <h3>What's Included</h3>
                        <ul class="ul-check">
                            <li>Full exterior wash and decontamination</li>
                            <li>Clay bar treatment and surface prep</li>
                            <li>Light paint correction (as needed)</li>
                            <li>Application of professional-grade ceramic coating</li>
                            <li>Final inspection and gloss enhancement</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>Benefits</h3>
                        <ul class="ul-check">
                            <li>Repels water, dirt, and grime</li>
                            <li>Protects against UV damage and oxidation</li>
                            <li>Makes washing easier and less frequent</li>
                            <li>Enhances and deepens your car’s shine</li>
                            <li>Lasts up to 2–5 years with proper maintenance</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h3>Ideal For</h3>
                        <ul class="ul-check">
                            <li>Daily drivers exposed to the elements</li>
                            <li>Show cars or vehicles with custom paintwork</li>
                            <li>Clients seeking a “just waxed” look year-round</li>
                            <li>New car for long-term paint protection</li>
                            <li>Luxury vehicle owners looking for premium care</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark-2 jarallax">
            <img src="images/background/1.webp" class="jarallax-img" alt="">
            <div class="sw-overlay"></div>
            <div class="container relative z-2">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="subtitle">Steps</div>
                        <h2>How It Works</h2>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-search fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Vehicle Inspection & Prep</h4>
                        <p>We inspect the paint and prep your vehicle with a deep wash and decontamination for optimal
                            coating adhesion.</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-paint-brush fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Paint Correction</h4>
                        <p>Swirls, scratches, and imperfections are polished out to restore a flawless base before coating
                            begins.</p>
                    </div>

                    <div class="col-6 col-md-3 de-step de-step-arrow">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-spray-can fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Ceramic Application</h4>
                        <p>We apply premium ceramic coating to all exterior surfaces, bonding it to the paint for long-term
                            protection.</p>
                    </div>

                    <div class="col-6 col-md-3 de-step">
                        <div class="de-step-icon bg-color">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                        <h4 class="fw-bold">Curing & Final Inspection</h4>
                        <p>After curing, we inspect the finish to ensure uniform gloss, durability, and maximum hydrophobic
                            effect.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="subtitle">Real Results</div>
                        <h2>Before & After Transformation</h2>
                        <p>See the dramatic difference ceramic coating makes—restoring clarity, depth, and shine while
                            adding a durable layer of protection. Every detail counts, and the results speak for themselves.
                        </p>
                    </div>

                    <div class="col-lg-6">
                        <div class="twentytwenty-container rounded-1">
                            <img src="images/before-after/1b.webp" alt="" class="img-responsive">
                            <img src="images/before-after/1a.webp" alt="" class="img-responsive">
                        </div>
                    </div>
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
    <!-- content end -->
@endsection
