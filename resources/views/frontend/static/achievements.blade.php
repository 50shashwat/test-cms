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
                    <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Milestone &amp; Achievements</strong>
                </div>
            </div>
        </div>
    </nav>
    <!-- contactAreaBlock -->


        <!-- contactAreaBlock -->
        <section class="contactAreaBlock contentBlock">

            <div class="container" style="text-align:center;padding:40px">
                <video width="320" height="240" controls style="width:100%;height:auto">
                    <source src="{{ asset('videos/award.mp4') }}" type="video/mp4">
                    Your browser does not support the video playback.
                </video>     

                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('achievements/0001.jpg') }}" class="img img-responsive"/>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('achievements/0002.jpg') }}" class="img img-responsive"/> 
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('achievements/0003.jpg') }}" class="img img-responsive"/>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('achievements/0004.jpg') }}" class="img img-responsive"/> 
                    </div>
                </div>

                
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('achievements/0005.jpg') }}" class="img img-responsive"/>
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('achievements/0006.jpg') }}" class="img img-responsive"/> 
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection