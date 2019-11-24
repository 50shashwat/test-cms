@extends('layouts.backend.app')

@section('head')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection

@section('content')
    
    <div class="container">
        <h3>Create Blog Post</h3>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/admin/blog" method="post" >
            @csrf
            
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

            <br />
            <div class="form-group row">
                <label for="posted_at" class="col-md-4 col-form-label text-md-right">{{ __('Posted At') }}</label>

                <div class="col-md-6">
                    <input required type="text" class="form-control" name="posted_at" >
                    
                    @error('posted_at')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br />
            
            <input type="submit" name="submit" value="Create" class="btn btn-primary" />
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

    });
    </script>
@endsection