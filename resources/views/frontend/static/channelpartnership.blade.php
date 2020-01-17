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
                            <li class="breadcrumb-item active" aria-current="page">{{Route::currentRouteName()}}</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Channel Partnership</strong>
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



                                        <form action="/contact" method="post">
                                            @csrf
                                            
                                            <input type="hidden" name="type" value="channel" />
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input name="name" onkeyup="this.value=this.value.replace(/[^a-z,^A-Z,^ ]/g,'');" type="text" class="form-control w-100 d-block" placeholder="Name *">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input name="phone"  onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  type="tel" class="form-control w-100 d-block" placeholder="Phone">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <input name="email" type="email" class="form-control w-100 d-block" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="others">Select Partnership Type</label>
                                                <select name="others" class="form-control" id="other" onchange="checkForOther()">
                                                    <option value="distributor"> Distributor </option>
                                                    <option value="dealer"> Dealer </option>
                                                    <option value="retailer"> Retailer </option>
                                                    <option value="wholeseller"> WholeSeller </option>
                                                    <option value="others"> Others </option>
                                                </select>
                                            </div>
                                            <div class="form-group" id="otherextra" style="display:none;">
                                                <input type="text" name="other2" class="form-control w-100 d-block"  placeholder="Enter Other">
                                            </div>
                                            <!-- form group -->
                                            <div class="form-group">
                                                <textarea name="message" class="form-control d-block w-100" placeholder="Message*"></textarea>
                                            </div>

                                            {!! htmlFormSnippet() !!}

                                            @if($errors->any())
                                                <div class="alert {{ ($errors->first('g-recaptcha-response')) ? 'has-error'  :''}}" style="color:red">
                                                    {{ $errors->first('g-recaptcha-response')? $errors->first('g-recaptcha-response') : "" }}
                                                </div>
                                            @endif

                                            <!-- button -->
                                            <button class="btn btnTheme d-block w-100 text-uppercase" type="submit" data-hover="Submit Query">
                                                <span class="d-block btnText">Submit Query</span>
                                            </button>
                                        </form>
                                    </aside>
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

<script src='https://www.google.com/recaptcha/api.js'></script>

@endsection
