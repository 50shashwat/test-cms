@extends('layouts.frontend.main')

@section('head')
<style>
        table tr td p a span{
            display: none;
        }
        </style>
@endsection

@section('content')

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
                    <li class="breadcrumb-item active" aria-current="page">Helpline Numbers</li>
                </ol>
            </div>
            <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                <!-- title -->
                <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Helpline Numbers</strong>
            </div>
        </div>
    </div>
</nav>
<!-- contactAreaBlock -->

<!-- contactAreaBlock -->
<section class="contactAreaBlock contentBlock">
    <div class="container">
        {!! $content !!}  
    </div>
</section>
@endsection