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
                            <li class="breadcrumb-item active" aria-current="page">Blog/Announcements</li>
                        </ol>
                    </div>
                    <div class="col-12 col-md-5 d-none d-md-flex align-items-md-center justify-content-md-end">
                        <!-- title -->
                        <strong class="title d-block text-right fontRoboto fwMedium text-capitalize text-dark">Blog/Announcements</strong>
                    </div>
                </div>
            </div>
        </nav>
    <div class="container" style="text-align:center;padding:40px">
            <div class="row">
                @foreach ($posts as $item)
                    <div class="col-md-4  col-sm-6">
                        <!-- widgetCtForm -->
                        <aside class="widget widgetCtForm hasShadow bg-white mb-4">
                                <a href="/blog-show/{{$item->id}}" >
                                        {!!$item->content!!}
                                </a>
                        </aside>
                    </div>
                @endforeach
            </div>
            
        {{ $posts->links() }}
    </div>

</main>
@endsection