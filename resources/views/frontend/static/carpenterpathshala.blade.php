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
                        <a href="/">
                            <i class="fas fa-home icn"><span class="sr-only">icon</span></i>
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Applications &amp; Solutions</li>
                </ol>
            </div>
            <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                <!-- title -->
                <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Applications &amp; Solutions</strong>
            </div>
        </div>
    </div>
</nav>
<!-- contactAreaBlock -->
<div class="container">
    <div class="row" style="margin: 70px auto">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="width:100%;margin-bottom:20px">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info About Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">India Service Centre's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Be Part Of Technical Solution Providers</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    {!! $infoAboutService  !!}
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    
                    {!! $indiasServiceCenter !!} 
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    
                </div>
            </div>
            
    </div>
</div>

</main>

@endsection