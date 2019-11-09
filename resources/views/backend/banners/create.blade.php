@extends('layouts.backend.app')

@section('content')
<div class="container">
    
    <h2>Create Inner Banner</h2>
    
    {!! Form::open(['url' => '/admin/banners', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('backend.banners.form', ['submitButtonText' => 'Create Banner'])
    {!! Form::close() !!}


</div>
    
@endsection