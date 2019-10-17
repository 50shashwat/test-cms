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
                               {!! $content[0] !!}
                            </div>
                        </div>
                        <!-- featuresList -->
                        <ul class="list-unstyled d-flex flex-wrap justify-content-between featuresList featuresList04 text-left">
                            <li class="hasOver">
                                <i class="icn icmon_01 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                        {!! $content[4] !!}
                                </div>
                            </li>
                            <li class="hasOver">
                                <i class="icn icmon_02 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                        {!! $content[5] !!}
                                </div>
                            </li>
                            <li class="hasOver">
                                <i class="icn icmon_03 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                        {!! $content[6] !!}
                                </div>
                            </li>
                            <li class="hasOver">
                                <i class="icn icmon_04 inaccessible flex-shrink-0"><span class="sr-only">icon</span></i>
                                <div class="extraWrap">
                                        {!! $content[7] !!}
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
                                        {!! $content[1] !!}
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
                                                {!! $content[2] !!}
                                            </p>
                                        </header>
                                        <header class="headingHead">
                                                <!-- blockH -->
                                                <h2 class="text-uppercase blockH font-weight-bold">
                                                    <!-- hTitle -->
                                                    <span class="d-block">Our Mission</span>
                                                </h2>
                                            <p>
                                                {!! $content[3] !!}    
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