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
                                                <input type="text" onkeyup="this.value=this.value.replace(/[^a-z,^A-Z,^ ]/g,'');" name="name" class="form-control w-100 d-block" required placeholder="Name *">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input type="tel" id="phone" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" name="phone" class="form-control w-100 d-block" required placeholder="Phone">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control w-100 d-block" required placeholder="Email">
                                            </div>
                                            <!-- form group -->

                                            <div class="form-group">
                                                <label for="resume">Upload Resume (&lt; 2MB) [PDF, XLSX, CSV, DOCX]</label>
                                                <input type="file" accept=
                                                "application/msword, application/vnd.ms-excel,text/plain, application/pdf" name="resume" class="form-control w-100 d-block" required placeholder="Resume">
                                            </div>
                                            <div class="form-group">
                                                <label for="others">Select Job Post</label>
                                                <select name="others" class="form-control" id="other" onchange="checkForOther()">
                                                    <option value="sales"> Sales </option>
                                                    <option value="admin"> Admin </option>
                                                    <option value="backend"> Backend </option>
                                                    <option value="accounts"> Accounts </option>
                                                    <option value="telecalling"> Telecalling </option>
                                                    <option value="office"> Office </option>
                                                    <option value="security"> Security </option>
                                                    <option value="quality"> Quality </option>
                                                    <option value="others"> Others </option>
                                                </select>
                                            </div>

                                            <div class="form-group" id="otherextra" style="display:none;">
                                                <input type="text" name="other2" class="form-control w-100 d-block"  placeholder="Enter Other">
                                            </div>
                                            
                                            <!-- form group -->
                                            <div class="form-group">
                                                <textarea name="message" class="form-control d-block w-100" required placeholder="Message*"></textarea>
                                            </div>
                                            <!-- button -->
                                            <button class="btn btnTheme d-block w-100 text-uppercase" type="submit" data-hover="Submit Query">
                                                <span class="d-block btnText">Submit Query</span>
                                            </button>
                                        </form>
                                    </aside>
                                </div>
                       
                            
                            
                                <div class="col-12 col-md-5">
                                        <!-- ctAddress -->
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                <a href="{{asset('downloads/interview_application.pdf')}}" target="_blank"  style="padding:10px">Download the form </a> , fill the form and submit it to  resume@harrisonlocks.com .
                                            </div>
                                        @endif
                                    </div>
                                </div>

                              
                        
                     </div>
                </section>

</main>

@endsection

@section('script')
<script>
        function checkForOther(){
            console.log("inside");
            var otherId = document.getElementById('other');
            if(otherId.value === 'others'){
                document.getElementById('otherextra').style.display = 'block';
            }else{
                document.getElementById('otherextra').style.display = 'none';
            }
        }
    </script>

    <script>
    $('#phone').on('keydown keyup', function(e){
        if ($(this).val().length >= 10 
            && e.keyCode !== 46 // keycode for delete
            && e.keyCode !== 8 // keycode for backspace
            ) {
            e.preventDefault();
            
        }
    });

    </script>
@endsection