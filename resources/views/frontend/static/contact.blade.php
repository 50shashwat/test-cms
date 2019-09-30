@extends('layouts.frontend.main')

@section('content')
<main>

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
                            <li class="breadcrumb-item active" aria-current="page">{{Route::currentRouteName()}}</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">contact</strong>
                    </div>
                </div>
            </div>
        </nav>
        <!-- contactAreaBlock -->


			<!-- contactAreaBlock -->
			<section class="contactAreaBlock contentBlock">
                    <div class="container">
                        <div class="row mb-5 align-items-center">
                            <div class="col-12 col-md-5">
                                <h2 class="text-uppercase">Get it touch</h2>
                                <p><span class="fontRoboto"></span></p>
                                <!-- ctAddress -->
                                <address class="ctAddress text-dark">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-center">
                                            <i class="ei_icon_pin_alt icn text-center flex-shrink-0"><span class="sr-only">icon</span></i>
                                            <strong class="text font-weight-normal">14, Central Market, West Punjabi Bagh, Punjabi Bagh, New Delhi, Delhi 110026</strong>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="ei_icon_mail_alt text-center icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                            <strong class="text font-weight-normal"><a href="mailto:info@harrisonlocks.com">info@harrisonlocks.com</a></strong>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="ei_icon_mobile icn text-center flex-shrink-0"><span class="sr-only">icon</span></i>
                                            <strong class="text font-weight-normal"><a href="tel:1-800-103-5795">1-800-103-5795</a></strong>
                                        </li>
                                    </ul>
                                </address>
                            </div>
                            <div class="col-12 col-md-6 offset-xl-1 col-xl-6">
                                <!-- widgetCtForm -->
                                <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                                    <form action="javascript:void(0);">
                                        <!-- form group -->
                                        <div class="form-group">
                                            <input type="text" class="form-control w-100 d-block" placeholder="Name *">
                                        </div>
                                        <!-- form group -->
                                        <div class="form-group">
                                            <input type="tel" class="form-control w-100 d-block" placeholder="Phone">
                                        </div>
                                        <!-- form group -->
                                        <div class="form-group">
                                            <textarea class="form-control d-block w-100" placeholder="Message*"></textarea>
                                        </div>
                                        <!-- button -->
                                        <button class="btn btnTheme d-block w-100 text-uppercase" type="submit" data-hover="Get A Quote">
                                            <span class="d-block btnText">Get A Quote</span>
                                        </button>
                                    </form>
                                </aside>
                            </div>
                        </div>
                        <!-- ctMapHolder -->
                        <div class="ctMapHolder position-relative ">
                            <!-- map -->
                            <iframe class="bgCover map d-block" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28004.970865257597!2d77.133836!3d28.671054000000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e54092bb285b3e1!2sHarrison%20Locks!5e0!3m2!1sen!2sin!4v1569843703363!5m2!1sen!2sin" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" style="width:100%;height:450px"></iframe>
                           
                        </div>
                    </div>
                </section>

</main>

@endsection