@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Edit Banner</h2>
   <div class="card" style="padding:10px">
        {!! Form::model($banner, [
            'method' => 'PATCH',
            'url' => ['/admin/banners', $banner->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('backend.banners.form', ['submitButtonText' => 'Update Banner'])
        {!! Form::close() !!}
   </div>

</div>
    
@endsection