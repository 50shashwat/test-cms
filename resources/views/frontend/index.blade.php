@extends('layouts.frontend.main')


@section('content')
<main>
    <!-- bannerSliderBlock -->
    <section class="bannerSliderBlock bsbOffsetTop bannerSliderBlock02 bannerSlider w-100 slickSlider text-center text-white">
        <!-- bannerSliderSlide -->
        <div class="bannerSliderSlide">
            <!-- bannerSlideHolder -->
            <div class="container bannerSlideHolder bannerSlideHolder02 position-relative">
                <div class="align">
                    <!-- bannerSlideHeader -->
                    <header class="bannerSlideHeader">
                        <h1 class="text-uppercase fwSemiBold fontBase">Harrison Locks</h1>
                        <p>We build trust with our products</p>
                    </header>
                    <!-- btnHolder -->
                    <footer class="btnHolder d-flex flex-wrap justify-content-center">
                        <a href="javascript:void(0);" class="btn btnThemeOutine text-uppercase" data-hover="Learn More">
                            <span class="d-block btnText">Learn More</span>
                        </a>
                        <a href="/contact-us" class="btn btnTheme text-uppercase" data-hover="Contact Us">
                            <span class="d-block btnText">Contact Us</span>
                        </a>
                    </footer>
                </div>
            </div>
            <!-- bannerBlockSlideBg -->
            <span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/img01.jpg);">
                <img class="sr-only" src="images/img01.jpg" alt="image description">
            </span>
        </div>
        <!-- bannerSliderSlide -->
        <div class="bannerSliderSlide">
            <!-- bannerSlideHolder -->
            <div class="container bannerSlideHolder bannerSlideHolder02 position-relative">
                <div class="align">
                    <!-- bannerSlideHeader -->
                    <header class="bannerSlideHeader">
                        <h1 class="text-uppercase fwSemiBold fontBase">Launching Kitchen Accessories</h1>
                        <p>A wide range of kitchen accessories can be purchased from our stores.</p>
                    </header>
                    <!-- btnHolder -->
                    <footer class="btnHolder d-flex flex-wrap justify-content-center">
                        <a href="javascript:void(0);" class="btn btnThemeOutine text-uppercase" data-hover="Learn More">
                            <span class="d-block btnText">Learn More</span>
                        </a>
                    </footer>
                </div>
            </div>
            <!-- bannerBlockSlideBg -->
            <span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/img02.jpg);">
                <img class="sr-only" src="images/img02.jpg" alt="image description">
            </span>
        </div>
        <!-- bannerSliderSlide -->
        <div class="bannerSliderSlide">
            <!-- bannerSlideHolder -->
            <div class="container bannerSlideHolder bannerSlideHolder02 position-relative">
                <div class="align">
                    <!-- bannerSlideHeader -->
                    <header class="bannerSlideHeader">
                        <h1 class="text-uppercase fwSemiBold fontBase">Door Handle Set</h1>
                        <p>Choose from a wide variety of door handle sets</p>
                    </header>
                    <!-- btnHolder -->
                    <footer class="btnHolder d-flex flex-wrap justify-content-center">
                        <a href="javascript:void(0);" class="btn btnThemeOutine text-uppercase" data-hover="Learn More">
                            <span class="d-block btnText">Learn More</span>
                        </a>
                        <a href="contact2.html" class="btn btnTheme text-uppercase" data-hover="Contact Us">
                            <span class="d-block btnText">Contact Us</span>
                        </a>
                    </footer>
                </div>
            </div>
            <!-- bannerBlockSlideBg -->
            <span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/img03.jpg);">
                <img class="sr-only" src="images/img03.jpg" alt="image description">
            </span>
        </div>

        <!-- bannerSliderSlide -->
        <div class="bannerSliderSlide">
            <!-- bannerSlideHolder -->
            <div class="container bannerSlideHolder bannerSlideHolder02 position-relative">
                <div class="align">
                    <!-- bannerSlideHeader -->
                    <header class="bannerSlideHeader">
                        <h1 class="text-uppercase fwSemiBold fontBase"> Kitchen Accessories</h1>
                        <p>A wide range of kitchen accessories can be purchased from our stores</p>
                    </header>
                    <!-- btnHolder -->
                    <footer class="btnHolder d-flex flex-wrap justify-content-center">
                        <a href="javascript:void(0);" class="btn btnThemeOutine text-uppercase" data-hover="Learn More">
                            <span class="d-block btnText">Learn More</span>
                        </a>
                        <a href="contact2.html" class="btn btnTheme text-uppercase" data-hover="Contact Us">
                            <span class="d-block btnText">Contact Us</span>
                        </a>
                    </footer>
                </div>
            </div>
            <!-- bannerBlockSlideBg -->
            <span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/img04.jpg);">
                <img class="sr-only" src="images/img04.jpg" alt="image description">
            </span>
        </div>
    </section>
    
    <!-- wcuBlock -->
    
    {{-- <section class="wcuBlock contentBlock">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 col-md-7 order-md-2">
                    <div class="extraWrap pl-xl-5">
                            <!-- headingHead -->
                        <header class="headingHead">
                            <!-- blockH -->
                            <h2 class="text-uppercase blockH font-weight-bold">
                                <!-- hTitle -->
                                <strong class="font-weight-normal hTitle d-block fontBase">Benefit</strong>
                                <span class="d-block">Why Choose Us</span>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua.</p>
                        </header>
                        <!-- yoeListing -->
                        <ul class="list-unstyled yoeListing">
                            <li class="hasOver">
                                <!-- titleWrap -->
                                <div class="titleWrap d-flex align-items-center">
                                    <i class="ti-ruler-pencil d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                    <h3>Year Of Experience</h3>
                                </div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </li>
                            <li class="hasOver">
                                <!-- titleWrap -->
                                <div class="titleWrap d-flex align-items-center">
                                    <i class="ti-alarm-clock d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                    <h3>Optimized For Leads</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                            </li>
                            <li class="hasOver">
                                <!-- titleWrap -->
                                <div class="titleWrap d-flex align-items-center">
                                    <i class="ti-reload d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                    <h3>Easy to Update</h3>
                                </div>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit pernatur aut odit aut fugit.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-none d-md-block col-md-5 order-md-1">
                    <!-- wcuBlockImageHolder -->
                    <div class="wcuBlockImageHolder bgCover d-flex w-100 h-100 rounded" style="background-image: url(images/img18.jpg);">
                        <img class="rounded" src="images/why_us.jpg" alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- mkCallAside -->
    <aside class="mkCallAside position-relative text-center text-md-left text-white" data-parallax="scroll" data-image-src="">
        <div class="container mkCallAsideHolder position-relative wow fadeInUp" data-wow-delay="0.1s">
            <div class="align">
                <div class="row align-items-md-center">
                    <div class="col-12 col-md-8">
                        <h2 class="text-uppercase font-weight-bold">For Sales And Business Query</h2>
                        <p>Do call us here</p>
                    </div>
                    <div class="col-12 col-md-4 text-md-right">
                        <a href="tel:18001035795" class="btn btnTheme btnThemeWhiteInverse fontRoboto btnRoudedLarge" data-hover="+91 931 014 2402">
                            <span class="btnText d-block">
                                <i class="ei_icon_phone btnIcn"><span class="sr-only">icon</span></i>
                                <span>1-800-103-5795</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
    
    
    <!-- prejectsListingBlock -->
    <section class="contentBlock prejectsListingBlock prejectsListingBlock02 position-relative pb-0">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- headingHead -->
                    <header class="headingHead text-center">
                        <!-- blockH -->
                        <h2 class="text-uppercase blockH font-weight-bold mb-0">
                            <!-- hTitle -->
                            <span class="d-block">Our Products</span>
                        </h2>
                    </header>
                    <!-- filtersNavTabs -->
                    <ul class="nav nav-tabs filtersNavTabs justify-content-md-center text-capitalize" id="filtersTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">View All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="vintage-tab" data-toggle="tab" href="#vintage" role="tab" aria-controls="vintage" aria-selected="false">Kitchen Accesories</a>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
        <!-- filtersTabContentWrap -->
        <div class="tab-content filtersTabContentWrap position-relative wow fadeInUp" data-wow-delay="0.1s" id="filtersTabContent">
            <!-- all tab -->
            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                <div class="row d-block">
                    <!-- prPostsSlider -->
                    <div class="prPostsSlider prPostsSlider02 slickSlider">
                        <div>
                            <div class="col-12">
                                <!-- prPostColumn -->
                                <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                    <!-- prColumnBgCover -->
                                    <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/cup_saucer_basket.jpg);">
                                        <img class="sr-only" src="images/home/cup_saucer_basket.jpg" alt="image description">
                                    </span>
                                    <!-- prPostCaption -->
                                    <div class="prPostCaption bg-white rounded">
                                        <h3>
                                            <!-- hTitle -->
                                            <strong class="font-weight-normal hTitle d-block fontBase">Cup Saucer Basket</strong>
                                            <span class="d-block"><a href="/products">View Details.</a></span>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <!-- prPostColumn -->
                                <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                    <!-- prColumnBgCover -->
                                    <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/perforated_cutlury_basket.jpg);">
                                        <img class="sr-only" src="images/home/perforated_cutlury_basket.jpg" alt="image description">
                                    </span>
                                    <!-- prPostCaption -->
                                    <div class="prPostCaption bg-white rounded">
                                        <h3>
                                            <!-- hTitle -->
                                            <strong class="font-weight-normal hTitle d-block fontBase">Perforated Cutlury Basket</strong>
                                            <span class="d-block"><a href="/products">View Details.</a></span>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <!-- prPostColumn -->
                                <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                    <!-- prColumnBgCover -->
                                    <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/other_drawer1.jpg);">
                                        <img class="sr-only" src="images/home/other_drawer1.jpg" alt="image description">
                                    </span>
                                    <!-- prPostCaption -->
                                    <div class="prPostCaption bg-white rounded">
                                        <h3>
                                            <!-- hTitle -->
                                            <strong class="font-weight-normal hTitle d-block fontBase">Kitchen Drawer</strong>
                                            <span class="d-block"><a href="/products">View Details.</a></span>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                            <div class="col-12">
                                <!-- prPostColumn -->
                                <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                    <!-- prColumnBgCover -->
                                    <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/other_drawer2.jpg);">
                                        <img class="sr-only" src="images/home/other_drawer2.jpg" alt="image description">
                                    </span>
                                    <!-- prPostCaption -->
                                    <div class="prPostCaption bg-white rounded">
                                        <h3>
                                            <!-- hTitle -->
                                            <strong class="font-weight-normal hTitle d-block fontBase">Kitchen Drawer 2</strong>
                                            <span class="d-block"><a href="/products">View Details.</a></span>
                                        </h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div>
                                <div class="col-12">
                                    <!-- prPostColumn -->
                                    <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                        <!-- prColumnBgCover -->
                                        <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/cup_saucer_basket.jpg);">
                                            <img class="sr-only" src="images/home/cup_saucer_basket.jpg" alt="image description">
                                        </span>
                                        <!-- prPostCaption -->
                                        <div class="prPostCaption bg-white rounded">
                                            <h3>
                                                <!-- hTitle -->
                                                <strong class="font-weight-normal hTitle d-block fontBase">Cup Saucer Basket</strong>
                                                <span class="d-block"><a href="/products">View Details.</a></span>
                                            </h3>
                                        </div>
                                    </article>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- vintage tab -->
            <div class="tab-pane fade" id="vintage" role="tabpanel" aria-labelledby="vintage-tab">
                <div class="row d-block">
                    <!-- prPostsSlider -->
                    <div class="prPostsSlider prPostsSlider02 slickSlider">
                            <div>
                                    <div class="col-12">
                                        <!-- prPostColumn -->
                                        <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                            <!-- prColumnBgCover -->
                                            <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/cup_saucer_basket.jpg);">
                                                <img class="sr-only" src="images/home/cup_saucer_basket.jpg" alt="image description">
                                            </span>
                                            <!-- prPostCaption -->
                                            <div class="prPostCaption bg-white rounded">
                                                <h3>
                                                    <!-- hTitle -->
                                                    <strong class="font-weight-normal hTitle d-block fontBase">Cup Saucer Basket</strong>
                                                    <span class="d-block"><a href="/products">View Details.</a></span>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-12">
                                        <!-- prPostColumn -->
                                        <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                            <!-- prColumnBgCover -->
                                            <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/perforated_cutlury_basket.jpg);">
                                                <img class="sr-only" src="images/home/perforated_cutlury_basket.jpg" alt="image description">
                                            </span>
                                            <!-- prPostCaption -->
                                            <div class="prPostCaption bg-white rounded">
                                                <h3>
                                                    <!-- hTitle -->
                                                    <strong class="font-weight-normal hTitle d-block fontBase">Perforated Cutlury Basket</strong>
                                                    <span class="d-block"><a href="/products">View Details.</a></span>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-12">
                                        <!-- prPostColumn -->
                                        <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                            <!-- prColumnBgCover -->
                                            <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/other_drawer1.jpg);">
                                                <img class="sr-only" src="images/home/other_drawer1.jpg" alt="image description">
                                            </span>
                                            <!-- prPostCaption -->
                                            <div class="prPostCaption bg-white rounded">
                                                <h3>
                                                    <!-- hTitle -->
                                                    <strong class="font-weight-normal hTitle d-block fontBase">Kitchen Drawer</strong>
                                                    <span class="d-block"><a href="/products">View Details.</a></span>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div>
                                    <div class="col-12">
                                        <!-- prPostColumn -->
                                        <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                            <!-- prColumnBgCover -->
                                            <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/other_drawer2.jpg);">
                                                <img class="sr-only" src="images/home/other_drawer2.jpg" alt="image description">
                                            </span>
                                            <!-- prPostCaption -->
                                            <div class="prPostCaption bg-white rounded">
                                                <h3>
                                                    <!-- hTitle -->
                                                    <strong class="font-weight-normal hTitle d-block fontBase">Kitchen Drawer 2</strong>
                                                    <span class="d-block"><a href="/products">View Details.</a></span>
                                                </h3>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                <div>
                                        <div class="col-12">
                                            <!-- prPostColumn -->
                                            <article class="prPostColumn prPostColumn02 hasOver position-relative">
                                                <!-- prColumnBgCover -->
                                                <span class="bgCover prColumnBgCover d-block" style="background-image: url(images/home/cup_saucer_basket.jpg);">
                                                    <img class="sr-only" src="images/home/cup_saucer_basket.jpg" alt="image description">
                                                </span>
                                                <!-- prPostCaption -->
                                                <div class="prPostCaption bg-white rounded">
                                                    <h3>
                                                        <!-- hTitle -->
                                                        <strong class="font-weight-normal hTitle d-block fontBase">Cup Saucer Basket</strong>
                                                        <span class="d-block"><a href="/products">View Details.</a></span>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
          
        </div>
    </section>
    <!-- ltPostsBlock -->
    <section class="contentBlock ltPostsBlock">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 text-center">
                    <!-- headingHead -->
                    <header class="headingHead wow fadeInUp" data-wow-delay="0.1s">
                        <!-- blockH -->
                        <h2 class="text-uppercase blockH font-weight-bold">
                            <!-- hTitle -->
                            <strong class="font-weight-normal hTitle d-block fontBase">Blog</strong>
                            <span class="d-block">Latest Post</span>
                        </h2>
                        <p>Get updated with our latest innovation.</p>
                    </header>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ltPostColumn -->
                    <article class="ltPostColumn ltPostColumn02 hasOver">
                        <!-- aligncenter -->
                        <div class="aligncenter position-relative rounded">
                            <img class="rounded" src="images/img27.jpg" alt="image description">
                        </div>
                        <!-- posterTagline -->
                        <em class="posterTagline d-block fwMedium pt-1">
                            <span class="d-inline-block">By <a href="javascript:void(0);">Harrison R&amp;D</a></span>
                            <span class="sep d-inline-block">|</span>
                            <time datetime="2011-01-12" class="d-inline-block"><a href="javascript:void(0);">Sep 24, 2019</a></time>
                        </em>
                        <h3><a href="#">Motorised Modular Kitchen Kits</a></h3>
                        <a href="#" class="btnMore d-inline-block">Details <i class="icn ei_arrow_right"><span class="sr-only">icon</span></i></a>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ltPostColumn -->
                    <article class="ltPostColumn ltPostColumn02 hasOver">
                        <!-- aligncenter -->
                        <div class="aligncenter position-relative rounded">
                            <img class="rounded" src="images/img28.jpg" alt="image description">
                        </div>
                        <!-- posterTagline -->
                        <em class="posterTagline d-block fwMedium pt-1">
                            <span class="d-inline-block">By <a href="javascript:void(0);">Harrison Sales</a></span>
                            <span class="sep d-inline-block">|</span>
                            <time datetime="2011-01-12" class="d-inline-block"><a href="javascript:void(0);">Sep 26, 2019</a></time>
                        </em>
                        <h3><a href="#">Our company touched 200 million product sales in Q3 2019</a></h3>
                        <a href="#" class="btnMore d-inline-block">Details <i class="icn ei_arrow_right"><span class="sr-only">icon</span></i></a>
                    </article>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- ltPostColumn -->
                    <article class="ltPostColumn ltPostColumn02 hasOver">
                        <!-- aligncenter -->
                        <div class="aligncenter position-relative rounded">
                            <img class="rounded" src="images/img29.jpg" alt="image description">
                        </div>
                        <!-- posterTagline -->
                        <em class="posterTagline d-block fwMedium pt-1">
                            <span class="d-inline-block">By <a href="javascript:void(0);">Harrison Sales</a></span>
                            <span class="sep d-inline-block">|</span>
                            <time datetime="2011-01-12" class="d-inline-block"><a href="javascript:void(0);">Sep 27, 2019</a></time>
                        </em>
                        <h3><a href="#">Lauching Modular Kitchen Accessories</a></h3>
                        <a href="#" class="btnMore d-inline-block">Details <i class="icn ei_arrow_right"><span class="sr-only">icon</span></i></a>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

