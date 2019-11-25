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
        {!! Form::model($post, [
            'method' => 'PUT',
            'url' => ['/admin/blog',$post->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}
        
            <input type="hidden" name="id" value="{{$post->id}}" />
            <br>

            {!! Form::label('title', 'Blog Title*', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            
            {!! Form::label('slug', 'Slug*', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('slug', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
            </div>
            <br>

            <label>Content*</label>
            <textarea id="editor" name="content" class="summernote"></textarea>
            <br>
            
            {!! Form::label('posted_at', 'Posted At*', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('posted_at', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                {!! $errors->first('posted_at', '<p class="help-block">:message</p>') !!}
            </div>
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-primary" />
            
        {!! Form::close() !!}
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <script >
    $(document).ready(function() {

        $('#editor').summernote({
        height:300,
        });

        var content = {!! json_encode($post->content) !!};
        //set the content to summernote using `code` attribute.
        $('#editor').summernote('code', content);

    });
    </script>
@endsection