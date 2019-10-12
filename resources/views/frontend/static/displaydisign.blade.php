@extends('layouts.frontend.main')

@section('content')
<div class="container" style="text-align:center;padding:40px">
    <video width="320" height="240" controls style="width:100%;height:auto">
        <source src="{{ asset('videos/dnd.mp4') }}" type="video/mp4">
        Your browser does not support the video playback.
    </video>    
    </div>
@endsection