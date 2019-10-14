@extends('layouts.backend.app')

@section('head')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection

@section('content')
    
    <div class="container">
        <h3>Edit {{$page->type}}</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/admin/pages/{{$page->type}}" method="post" >
            @csrf
            <input type="hidden" name="type" value="{{$page->type}}" />
            <textarea id="editor" name="content" class="summernote"></textarea>
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-primary" />
        </form>
    </div>

@endsection

@section('script')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <script >
    $(document).ready(function() {

        $('#editor').summernote({
        height:300,
        });

        var content = {!! json_encode($page->content) !!};
        //set the content to summernote using `code` attribute.
        $('#editor').summernote('code', content);

    });
    </script>
@endsection