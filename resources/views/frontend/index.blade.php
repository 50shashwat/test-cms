@extends('layouts.frontend.main')


@section('script')
    <script>
           @if($popup->is_active==1)  $('#popup').modal('show'); @endif
    </script>
    <style>
    .custom-btn-handle{
        font-size: 24px;
        line-height: 1;
        min-width: 270px;
        border-radius: 99px;
        background-color:#000034;
        border-color:transparent;
        letter-spacing: 1.3px;
        padding: 0;
        border: 0;
        display: inline-block;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
    }
    .custom-banner{
        position: absolute;
        top: 30px;
        left: 0;
        width: 100%;
    }
    .custom-res-height{
        height: 550px
    }
    
    @media only screen and (max-width: 600px) {
        .custom-res-height{
            height: 350px
        }
    }
    </style>
@endsection

@section('content')
<main>
    <!-- bannerSliderBlock -->
    <section class="bannerSliderBlock bsbOffsetTop bannerSliderBlock02 bannerSlider w-100 slickSlider text-center text-white" >
        <!-- bannerSliderSlide -->
        @foreach($banners as $banner)
        <div class="bannerSliderSlide custom-res-height">
            <!-- bannerSlideHolder -->
            <div style="background:rgb(0, 0, 0,0.6);position: absolute;z-index: 10000;top: 0;left: 0;width: 100%;height: 100%;">
            <div class="container bannerSlideHolder bannerSlideHolder02 position-relative custom-res-height"  >
                <div class="align">
                    <!-- bannerSlideHeader -->
                    <header class="bannerSlideHeader">
                        <h1 class="text-uppercase fwSemiBold fontBase">{{$banner->title}}</h1>
                        <p>{{$banner->description}}</p>
                    </header>
                    <!-- btnHolder -->
                </div>
            </div>
            </div>
            
            <img src="{{asset('images/'.$banner->background_image)}}" class="custom-banner custom-res-height" />
            <!-- bannerBlockSlideBg -->
            {{-- <span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url('{{asset('images/'.$banner->background_image)}}');">
                <img class="sr-only" src="{{asset('images/').$banner->background_image}}" alt="{{$banner->title}}">
            </span> --}}
        </div>

        @endforeach
        
    </section>
    
    <!-- wcuBlock -->
    
    {{-- <section class="wcuBlock contentBlock">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 col-md-7 order-md-2">
                    <div class="extraWrap pl-xl-5">
                            <!-- headingHead -->
                        <header class="headingHead">
                            <!-- blockH -->
                            <h2 class="text-uppercase blockH font-weight-bold">
                                <!-- hTitle -->
                                <strong class="font-weight-normal hTitle d-block fontBase">Benefit</strong>
                                <span class="d-block">Why Choose Us</span>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua.</p>
                        </header>
                        <!-- yoeListing -->
                        <ul class="list-unstyled yoeListing">
                            <li class="hasOver">
                                <!-- titleWrap -->
                                <div class="titleWrap d-flex align-items-center">
                                    <i class="ti-ruler-pencil d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                    <h3>Year Of Experience</h3>
                                </div>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            </li>
                            <li class="hasOver">
                                <!-- titleWrap -->
                                <div class="titleWrap d-flex align-items-center">
                                    <i class="ti-alarm-clock d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                    <h3>Optimized For Leads</h3>
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                            </li>
                            <li class="hasOver">
                                <!-- titleWrap -->
                                <div class="titleWrap d-flex align-items-center">
                                    <i class="ti-reload d-block icn flex-shrink-0"><span class="sr-only">icon</span></i>
                                    <h3>Easy to Update</h3>
                                </div>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit pernatur aut odit aut fugit.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 d-none d-md-block col-md-5 order-md-1">
                    <!-- wcuBlockImageHolder -->
                    <div class="wcuBlockImageHolder bgCover d-flex w-100 h-100 rounded" style="background-image: url(images/img18.jpg);">
                        <img class="rounded" src="images/why_us.jpg" alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- mkCallAside -->
    <aside class="mkCallAside position-relative text-center text-md-left text-white" data-parallax="scroll" data-image-src="">
        <div class="container mkCallAsideHolder position-relative wow fadeInUp" data-wow-delay="0.1s">
            <div class="align">
                <div class="row align-items-md-center">
                    <div class="col-12 col-md-8">
                        <h2 class="text-uppercase font-weight-bold">For Sales And Business Query</h2>
                        <p>Do call us here</p>
                    </div>
                    <div class="col-12 col-md-4 text-md-right">
                        <div class=" custom-btn-handle ">
                            <span class="btnText d-block">
                                <i class="ei_icon_phone btnIcn"><span class="sr-only">icon</span></i>
                                <span>{{$contact->phone1}}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    

    <section class="contentBlock ltPostsBlock">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 text-center">
                    <!-- headingHead -->
                    <header class="headingHead wow fadeInUp" data-wow-delay="0.1s">
                        <!-- blockH -->
                        <h2 class="text-uppercase blockH font-weight-bold">
                            <!-- hTitle -->
                            <strong class="font-weight-normal hTitle d-block fontBase">Blog</strong>
                            <span class="d-block">Latest Newsletter</span>
                        </h2>
                    </header>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($posts as $item)
                <div class="col-12 col-md-6 col-lg-4">
                        <!-- ltPostColumn -->
                        <article class="ltPostColumn ltPostColumn02 hasOver">
                            <a href="/blog-show/{{$item->id}}" >
                                {!! $item->content !!}
                            </a>
                        </article>
                    </div>      
                @endforeach
                
            </div>
        </div>
    </section>
</main>




<div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Newsletter Subscription Confirmed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Thankyou for subscribing with us</p>
            </div>
            <div class="modal-footer">
                <button class="btn btnTheme text-uppercase" type="button" data-hover="Close"  data-dismiss="modal">
                    <span class="d-block btnText">Close</span>
                </button>
            </div>
            </div>
        </div>
    </div>
    

    

<div id="popup" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="top:100px">
        <div class="modal-header">
            <button class="btn btnTheme text-uppercase" type="button" data-hover="Close"  data-dismiss="modal">
                <span class="d-block btnText">Close</span>
            </button>
        </div>
        <div class="modal-body">
            @if($popup->is_image)
                <img src="{{asset('images/'. $popup->image_url)}}" alt="" style="width: 100%; height: auto" />
            @else
                <iframe style="width:100%" height="315" src="{{$popup->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
        </div>
        <div class="modal-footer">
        </div>
        </div>
    </div>
</div>
    

    
    @if (session('success'))
    <script >
        $('#myModal').modal('show');
    </script>
    @endif

    
@endsection

