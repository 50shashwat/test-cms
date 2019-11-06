@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Edit Popup</h2>
   <div class="card" style="padding:10px">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        {!! Form::model($popup, [
            'method' => 'PATCH',
            'url' => ['/admin/popup'],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('backend.popups.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
   </div>

</div>
    
@endsection