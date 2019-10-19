@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Edit Inner Category</h2>
   <div class="card" style="padding:10px">
        {!! Form::model($innercategory, [
            'method' => 'PATCH',
            'url' => ['/admin/innercategories', $innercategory->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('backend.products.innercategories.form', ['submitButtonText' => 'Update Inner Category'])
        {!! Form::close() !!}
   </div>

</div>
    
@endsection