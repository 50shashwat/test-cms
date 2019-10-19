@extends('layouts.backend.app')

@section('content')
<div class="container">
    
    <h2>Inner Categories</h2>
    
    {!! Form::open(['url' => '/admin/innercategories', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('backend.products.innercategories.form', ['submitButtonText' => 'Create Inner Category'])
    {!! Form::close() !!}


</div>
    
@endsection