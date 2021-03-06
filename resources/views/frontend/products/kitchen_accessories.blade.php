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
                            <li class="breadcrumb-item active" aria-current="page">Kitchen Accessories</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Kitchen Accessories</strong>
                    </div>
                </div>
            </div>
        </nav>
        <!-- contactAreaBlock -->
        
        <div class="alert alert-warning">For Best Experience View in 1024*764 Resolution or above on Desktop/Laptop</div> 
        
        <div class="container" style="margin-bottom:60px;margin-top:10px;padding:50px">
            <iframe src="{{asset('/turn-kitchen/index.html')}}" style="width:100%; height:800px;border:0px;padding:0px" ></iframe>
        </div>

</main>

@endsection