@extends('layouts.frontend.main')

@section('content')
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
        
</div>
@endsection