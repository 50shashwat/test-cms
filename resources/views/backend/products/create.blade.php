@extends('layouts.backend.app')

@section('head')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection


@section('script')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <script >
    $(document).ready(function() {

        $('#editor').summernote({
        height:300,
        });

    });
    </script>
@endsection


@section('content')
<div class="container">
    
<h2>Create Product</h2>
    
    {!! Form::open(['url' => '/admin/products', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('backend.products.form', ['submitButtonText' => 'Create Product'])
    {!! Form::close() !!}


</div>
    

@endsection

