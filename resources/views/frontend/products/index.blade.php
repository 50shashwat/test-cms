@extends('layouts.frontend.main')

@section('content')
<div class="container">
        <div class="row mb-5 align-items-center">
                <div class="col-12 col-md-5  col-xl-6">
                        <!-- widgetCtForm -->
                        <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                                <a href="/products/locks" class="btn btnTheme text-uppercase" data-hover="Lock">
                                        <span class="d-block btnText"> {{ __('Lock') }} </span>
                                </a>
                        </aside>
                </div>
                <div class="col-12 col-md-5  col-xl-6">
                        <!-- widgetCtForm -->
                        <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                        <a href="/products/kitchen-accessories" class="btn btnTheme text-uppercase" data-hover="Kitchen Accessories">
                                <span class="d-block btnText"> {{ __('Kitchen Accessories') }} </span>
                        </a>
                        </aside>
                </div>
        </div>
</div>
@endsection