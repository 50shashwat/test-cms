@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Categories</h2>
    
    {!! Form::open(['url' => '/admin/categories', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('backend.products.categories.form', ['submitButtonText' => 'Create Category'])
    {!! Form::close() !!}


</div>
    
@endsection