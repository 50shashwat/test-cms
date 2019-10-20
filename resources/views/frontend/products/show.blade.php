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
                                @if(isset($product->category))
                                        <li class="breadcrumb-item " aria-current="page"> {{ ucfirst($product->category->name) }} </li>
                                @endif
                                
                                @if(isset($product->subcategory))
                                        <li class="breadcrumb-item " aria-current="page"> {{ucfirst($product->subcategory->name) }} </li>
                                @endif

                                @if(isset($product->innercategory))
                                        <li class="breadcrumb-item " aria-current="page"> {{ucfirst($product->innercategory->name)}} </li>
                                @endif

                        </ol>
                        </div>
                        <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">{{$product->title}}</strong>
                        </div>
                </div>
                </div>
        </nav>
        <div class="container">
                <div class="row">
                <div class="col-md-12  col-sm-12">
                    <!-- widgetCtForm -->
                    <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                        <img src="{{asset('images')}}/{{$product->featured_image}}" class="img" style="width:100%;height:auto" />
                        <h4 style="text-align:center">{{$product->title}}</h4>
                    </aside>
                </div>
                </div>
                
        </div>
</main>
@endsection