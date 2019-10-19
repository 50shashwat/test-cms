@extends('layouts.backend.app')

@section('head')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
@endsection


@section('content')
<div class="container">
    
<h2>Edit Product</h2>
   <div class="card" style="padding:10px">
        {!! Form::model($product, [
            'method' => 'PATCH',
            'url' => ['/admin/products', $product->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('backend.products.form', ['submitButtonText' => 'Update Product'])
        {!! Form::close() !!}
   </div>

</div>
    
@endsection