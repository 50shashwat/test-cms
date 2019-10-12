@extends('layouts.frontend.main')

@section('content')
    <div class="container" style="text-align:center;padding:40px">
        <video width="320" height="240" controls style="width:100%;height:auto">
            <source src="{{ asset('videos/award.mp4') }}" type="video/mp4">
            Your browser does not support the video playback.
        </video>     

        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('achievements/0001.jpg') }}" class="img img-responsive"/>
            </div>
            <div class="col-md-6">
                <img src="{{asset('achievements/0002.jpg') }}" class="img img-responsive"/> 
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('achievements/0003.jpg') }}" class="img img-responsive"/>
            </div>
            <div class="col-md-6">
                <img src="{{asset('achievements/0004.jpg') }}" class="img img-responsive"/> 
            </div>
        </div>

        
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('achievements/0005.jpg') }}" class="img img-responsive"/>
            </div>
            <div class="col-md-6">
                <img src="{{asset('achievements/0006.jpg') }}" class="img img-responsive"/> 
            </div>
        </div>
    </div>
@endsection