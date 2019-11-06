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
                            <li class="breadcrumb-item active" aria-current="page">{{$page->title}}</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">{{$page->title}}</strong>
                    </div>
                </div>
            </div>
        </nav>
        <!-- contactAreaBlock -->


        <!-- contactAreaBlock -->
        <section class="contactAreaBlock contentBlock">
            <div class="container">
               {!! $page->content !!}
            </div>
        </section>

    </main>

@endsection