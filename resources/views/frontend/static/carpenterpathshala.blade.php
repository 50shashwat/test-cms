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
                    <li class="breadcrumb-item active" aria-current="page">Carpenter Pathshaala</li>
                </ol>
            </div>
            <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                <!-- title -->
                <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Carpenter Pathshaala</strong>
            </div>
        </div>
    </div>
</nav>
<!-- contactAreaBlock -->
<div class="container">
    <div class="row" style="margin: 70px auto">
        <div class="col-md-6" style="text-align:center">
            
            <video width="320" height="240" controls style="width:100%;height:auto">
                <source src="/downloads/faridabad.mp4" type="video/mp4">
                Your browser does not support the video playback.
            </video>     
        </div>
        
        <div class="col-md-6" style="text-align:center">
        <video width="320" height="240" controls style="width:100%;height:auto">
            <source src="/downloads/palwal.mp4" type="video/mp4">
            Your browser does not support the video playback.
        </video>  
            
        </div>
    </div>
</div>

</main>

@endsection