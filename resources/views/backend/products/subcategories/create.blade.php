@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Craete Sub Category</h2>
    
    {!! Form::open(['url' => '/admin/subcategories', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('backend.products.subcategories.form', ['submitButtonText' => 'Create Sub Category'])
    {!! Form::close() !!}


</div>
    
@endsection