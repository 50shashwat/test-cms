@extends('layouts.backend.app')


@section('content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Blog Post</h3>
            </div>
            <div class="col-md-6" style="text-align:right">
                <a href="/admin/blog/create" class="btn btn-primary">Create Post</a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-striped table-bordered">
            <tr>
                <th>S.No.</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Published Date</th>
                <th>
                    Action
                </th>
            </tr>
            @foreach($posts as $post)
            <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a href="/admin/blog/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                {{ Form::open([
                    'method'=>'DELETE',
                    'url' => ['/admin/blog', $post->id],
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
    </div>

@endsection
