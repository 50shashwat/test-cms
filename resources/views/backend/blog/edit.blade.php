@extends('layouts.backend.app')

@section('head')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection

@section('content')
    
    <div class="container">
        <h3>Edit {{$post->title}}</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/admin/blog/{{$post->id}}" method="put" >
            @csrf
            <input type="hidden" name="id" value="{{$post->id}}" />
            
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Blog Title') }}</label>

                <div class="col-md-6">
                    <input required type="text" class="form-control" name="title" >
                    
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="slug" class="col-md-4 col-form-label text-md-right">{{ __('slug') }}</label>

                <div class="col-md-6">
                    <input required type="text" class="form-control" name="slug" >
                    
                    @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <textarea id="editor" name="content" class="summernote"></textarea>
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-primary" />
        </form>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

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