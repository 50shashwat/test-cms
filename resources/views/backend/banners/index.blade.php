@extends('layouts.backend.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-6">
            <h2>Banners</h2>
        </div>
        <div class="col-md-6" style="text-align:right">
            <a href="/admin/banners/create" class="btn btn-outline-dark" >Create New Banner</a>
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
            <th>Background Image</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($banners as $item)
                
        <tr>
            <td>{{$item->id}}</td>
            <td><img src="{{asset('/images/'.$item->background_image) }}" width="200" style="width:300;height:auto" /></td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td><a href="/admin/banners/{{$item->id}}/edit" class="btn btn-outline-primary">Edit</a> 
                {{ Form::open([
                    'method'=>'DELETE',
                    'url' => ['admin/banners', $item->id],
                    'style' => 'display:inline'
                ]) }}
                    {{ Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-outline-danger',
                            'title' => 'Delete Banner',
                            'onclick'=>'return confirm("Confirm delete?")'
                    )) }}
                {{ Form::close() }}

            </td>
        </tr>
        @endforeach
    </table>

    
    {{ $banners->links() }}

</div>
    
@endsection