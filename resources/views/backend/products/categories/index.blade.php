@extends('layouts.backend.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <h2>Categories</h2>
        </div>
        <div class="col-md-6" style="text-align:right">
            <a href="/admin/categories/create" class="btn btn-outline-dark" >Create New Category</a>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Featured Image</th>
            <th>Action</th>
        </tr>
        @foreach ($items as $item)
                
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td><img src="{{asset('/images/'.$item->featured_image) }}" width="120" height="100" /></td>
            <td><a href="/admin/categories/{{$item->id}}/edit" class="btn btn-outline-primary">Edit</a> 
                {{ Form::open([
                    'method'=>'DELETE',
                    'url' => ['admin/categories', $item->id],
                    'style' => 'display:inline'
                ]) }}
                    {{ Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-outline-danger',
                            'title' => 'Delete Category',
                            'onclick'=>'return confirm("Confirm delete?")'
                    )) }}
                {{ Form::close() }}

            </td>
        </tr>
        @endforeach
    </table>

    
    {{ $items->links() }}

</div>
    
@endsection