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
                                <li class="breadcrumb-item">@if(isset($newarrival)) New Arrivals  @else Products  @endif</li>
                                
                                @if(isset($category))
                                        <li class="breadcrumb-item " aria-current="page"> {!! ucfirst($category->name) !!} </li>
                                @endif
                                
                                @if(isset($subcategory))
                                        <li class="breadcrumb-item " aria-current="page"> {{ucfirst($subcategory->name) }} </li>
                                @endif

                                @if(isset($innercategory))
                                        <li class="breadcrumb-item " aria-current="page"> {{ucfirst($innercategory->name)}} </li>
                                @endif

                        </ol>
                        </div>
                        <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Products</strong>
                        </div>
                </div>
                </div>
        </nav>
        <div class="container">
                <div class="row">
                        @foreach ($products as $product)
                                <div class="col-md-4  col-sm-6">
                                        <!-- widgetCtForm -->
                                        <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                                                <a href="/product-show/{{$product->id}}" >
                                                        <img src="{{asset('images')}}/{{$product->featured_image}}" class="img" style="width:300px;height:auto" />
                                                        <h4 style="text-align:center">{{$product->title}}</h4>
                                                </a>
                                        </aside>
                                </div>
                        @endforeach
                </div>
                
                <div class="row">
                        {{ $products->links() }}
                </div>
            
                
        </div>
</main>
@endsection