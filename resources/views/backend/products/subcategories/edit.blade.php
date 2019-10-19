@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Edit Sub Category</h2>
   <div class="card" style="padding:10px">
        {!! Form::model($subcategory, [
            'method' => 'PATCH',
            'url' => ['/admin/subcategories', $subcategory->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('backend.products.subcategories.form', ['submitButtonText' => 'Update Sub Category'])
        {!! Form::close() !!}
   </div>

</div>
    
@endsection