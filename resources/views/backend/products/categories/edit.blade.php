@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Edit Category</h2>
   <div class="card" style="padding:10px">
        {!! Form::model($category, [
            'method' => 'PATCH',
            'url' => ['/admin/categories', $category->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('backend.products.categories.form', ['submitButtonText' => 'Update'])
        {!! Form::close() !!}
   </div>

</div>
    
@endsection