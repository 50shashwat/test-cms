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
                            <li class="breadcrumb-item active" aria-current="page">Blog/Newsletter</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Blog/Newsletter</strong>
                    </div>
                </div>
            </div>
        </nav>
    <div class="container" style="text-align:center;padding:40px">
            <div class="row">
                   
                <div class="col-md-4  col-sm-6">
                        <!-- widgetCtForm -->
                        <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                                <a href="/blog-show/1" >
                                        <img src="{{asset('blog/images/blog1.jpg')}}" class="img" style="width:300px;height:auto" />
                                </a>
                        </aside>
                </div>

                <div class="col-md-4  col-sm-6">
                    <!-- widgetCtForm -->
                    <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                            <a href="/blog-show/2" >
                                    <img src="{{asset('blog/images/blog2.jpg')}}" class="img" style="width:300px;height:auto" />
                            </a>
                    </aside>
                </div>
            </div>
    </div>

</main>
@endsection