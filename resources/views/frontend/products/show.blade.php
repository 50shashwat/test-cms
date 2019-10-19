@extends('layouts.frontend.main')

@section('content')
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
@endsection