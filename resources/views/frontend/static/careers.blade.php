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
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">careers</strong>
                    </div>
                </div>
            </div>
        </nav>
        <!-- contactAreaBlock -->


			<!-- contactAreaBlock -->
			<section class="contactAreaBlock contentBlock">
                    <div class="container">
                        <div class="row mb-5 align-items-center">
                            

                            <div class="col-12 col-md-6 offset-xl-1 col-xl-6">
                          
                                    <!-- widgetCtForm -->
                                    <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form action="/contact" method="post"  enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="type" value="careers" />
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control w-100 d-block" placeholder="Name *">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input type="tel" name="phone" class="form-control w-100 d-block" placeholder="Phone">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control w-100 d-block" placeholder="Email">
                                            </div>
                                            <!-- form group -->

                                            <div class="form-group">
                                                <label for="resume">Upload Resume (&lt; 2MB)</label>
                                                <input type="file" name="resume" class="form-control w-100 d-block" placeholder="Resume">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <textarea name="message" class="form-control d-block w-100" placeholder="Message*"></textarea>
                                            </div>
                                            <!-- button -->
                                            <button class="btn btnTheme d-block w-100 text-uppercase" type="submit" data-hover="Get A Quote">
                                                <span class="d-block btnText">Submit Query</span>
                                            </button>
                                        </form>
                                    </aside>
                                </div>
                       
                            
                            
                                <div class="col-12 col-md-5">
                                        <!-- ctAddress -->
                                    </div>
                                </div>
                        
                     </div>
                </section>

</main>

@endsection