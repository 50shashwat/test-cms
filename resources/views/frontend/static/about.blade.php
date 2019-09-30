@extends('layouts.frontend.main')

@section('content')
    <!-- pageBdWrapNav -->
			<nav class="pageBdWrapNav bg-light" aria-label="breadcrumb">
                    <div class="container">
                        <div class="row align-items-md-center">
                            <div class="col-12 col-md-7">
                                <!-- breadcrumb -->
                                <ol class="breadcrumb pageBreadcrumb m-0 p-0 text-capitalize">
                                    <li class="breadcrumb-item">
                                        <a href="home.html">
                                            <i class="fas fa-home icn"><span class="sr-only">icon</span></i>
                                            Home
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">about us</li>
                                </ol>
                            </div>
                            <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                                <!-- title -->
                                <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">about us</strong>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- abtIntroAsideBlock -->
                <aside class="abtIntroAsideBlock contentBlock">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <!-- headingHead -->
                                <header class="headingHead">
                                    <!-- blockH -->
                                    <h2 class="text-uppercase blockH font-weight-bold mb-0">
                                        <!-- hTitle -->
                                        <strong class="font-weight-normal hTitle d-block fontBase">About</strong>
                                        <span class="d-block">Harrison Locks</span>
                                    </h2>
                                </header>
                            </div>
                            <div class="col-12 col-md-8">
                                <p>Over 6 decades, Harrison which has been brand leader in locks & hardware solution. Be fealess & desire for more from HARRISON with a bold thinking and rigorous craftsmanship combine to bring innovative, sturdy products.</p>
                                    <br />
                                <p> Harrison a brand, is one of the leading company known for providing best security & hardwaresolutions. We're celebrating 65+ years of setting the standards of excellences and pushing the limits of product design. whether we are bringing to you. </p>
                            </div>
                        </div>
                        <!-- featuresList -->
                        <ul class="list-unstyled d-flex flex-wrap justify-content-between featuresList featuresList04 text-left">
                            <li class="hasOver">
                                <i class="icn icmon_01 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                    <h3 class="fwSemiBold fontBase counter">20000000</h3>
                                    <h4 class="font-weight-normal fontBase">Customers</h4>
                                </div>
                            </li>
                            <li class="hasOver">
                                <i class="icn icmon_02 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                    <h3 class="fwSemiBold fontBase counter">2000</h3>
                                    <h4 class="font-weight-normal fontBase">Employees</h4>
                                </div>
                            </li>
                            <li class="hasOver">
                                <i class="icn icmon_03 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                    <h3 class="fwSemiBold fontBase counter">1000000</h3>
                                    <h4 class="font-weight-normal fontBase">Hours Working</h4>
                                </div>
                            </li>
                            <li class="hasOver">
                                <i class="icn icmon_04 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                    <h3 class="fwSemiBold fontBase counter">76</h3>
                                    <h4 class="font-weight-normal fontBase">Win Award</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
                <div class="container">
                    <!-- separatorDefault -->
                    <hr class="d-block separatorDefault mt-0 mb-0">
                </div>
                <!-- wcuBlock -->
                <section class="wcuBlock contentBlock">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-7 order-md-2">
                                <div class="extraWrap pl-xl-5">
                                    <!-- headingHead -->
                                    <header class="headingHead">
                                        <!-- blockH -->
                                        <h2 class="text-uppercase blockH font-weight-bold">
                                            <!-- hTitle -->
                                            <strong class="font-weight-normal hTitle d-block fontBase">Benefit</strong>
                                            <span class="d-block">Partner In Success</span>
                                        </h2>
                                        <p>
                                                If there's anyone we owe our success over 6 decades milestone to,it's you. Millions of customers in every home, accross the country who have shown their trust on every HARRISON product, that we have introduced. Here's looking forward to an even longer journey ahead with you!!
                                        </p>
                                    </header>
                                    <!-- yoeListing -->
                                    <ul class="list-unstyled yoeListing pl-xl-5">
                                        <li class="hasOver">
                                            <!-- titleWrap -->
                                            <div class="titleWrap d-flex align-items-center">
                                                <i class="ti-ruler-pencil d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                                <h3>60+ Year Of Experience</h3>
                                            </div>
                                        </li>
                                        <li class="hasOver">
                                            <!-- titleWrap -->
                                            <div class="titleWrap d-flex align-items-center">
                                                <i class="ti-alarm-clock d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                                <h3>We share trust</h3>
                                            </div>
                                        </li>
                                        <li class="hasOver">
                                            <!-- titleWrap -->
                                            <div class="titleWrap d-flex align-items-center">
                                                <i class="ti-reload d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                                <h3>India's Largest Lock Brand</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 d-none d-md-block col-md-5 order-md-1">
                                <!-- wcuBlockImageHolder -->
                                <div class="wcuBlockImageHolder bgCover d-flex w-100 h-100 rounded" style="background-image: url(images/img18.jpg);">
                                    <img class="rounded" src="images/img18.jpg" alt="image description">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                
                <!-- wcuBlock -->
                <section class="wcuBlock contentBlock">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-md-7 order-md-2">
                                    <div class="extraWrap pl-xl-5">
                                        <!-- headingHead -->
                                        <header class="headingHead">
                                            <!-- blockH -->
                                            <h2 class="text-uppercase blockH font-weight-bold">
                                                <!-- hTitle -->
                                                <span class="d-block">Our Vision</span>
                                            </h2>
                                            <p>
<blockquote style="font-style:italic;font-size:20px"> 
    "Vision without action is merely a dream. <br>
Action without vision just passes the time. <br>
Vision with action can change the world."</blockquote>
                                                    
                                                    HARRISON strives to be a trustworthy company, one of the best in security & door hardware segments and a preferred partner in all door, furniture, wardrobe, kitchen hardware & security solution segments. We also aim to be a forward- looking company, One that promotes a great working  environment and reliability for all our partners in success.
                                            </p>
                                        </header>
                                        <header class="headingHead">
                                                <!-- blockH -->
                                                <h2 class="text-uppercase blockH font-weight-bold">
                                                    <!-- hTitle -->
                                                    <span class="d-block">Our Mission</span>
                                                </h2>
                                            <p>
                                                    <blockquote style="font-style:italic;font-size:20px">  "The secret of success is consistency" </blockquote><br />

                                                    Rapid globalization of our business in order to enrich the quality of life keeps Harrison's R&D department always ready to introduce their new series of the world class, modern, sleek and trendylooksyet strong and sturdy with safety feature products time to time that matches international specifications and standard at affordable prices. The following important pillars at which our company is based.
                                                        <ul>
                                                            <li> TRUST</li>
                                                            <li> RELIABILITY AND INTEGRITY</li>
                                                            <li> CUSTOMER SERVICE & SATISFACTION </li>
                                                            <li> VALUE FOR MONEY </li>
                                                        </ul>
                                                    
                                            </p>
                                        </header>
                                     
                                    </div>
                                </div>
                                <div class="col-12 d-none d-md-block col-md-5 order-md-1">
                                    <!-- wcuBlockImageHolder -->
                                    <div class="wcuBlockImageHolder bgCover d-flex w-100 h-100 rounded" style="background-image: url(images/img18.jpg);">
                                        <img class="rounded" src="images/img18.jpg" alt="image description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- mkCallAside -->
                <aside class="mkCallAside animFour position-relative bgCover text-center text-md-left text-white" data-parallax="scroll" data-image-src="images/img50.jpg">
                    <div class="container mkCallAsideHolder position-relative">
                        <div class="align">
                            <div class="row align-items-md-center">
                                <div class="col-12 col-md-8">
                                    <h2 class="text-uppercase font-weight-bold">Call Us</h2>
                                </div>
                                <div class="col-12 col-md-4 text-md-right">
                                    <a href="tel:+123456789" class="btn btnTheme btnThemeWhiteInverse fontRoboto btnRoudedLarge" data-hover="1-800-103-5795">
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
                
            </main>
            
@endsection