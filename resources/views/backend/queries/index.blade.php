@extends('layouts.backend.app')

@section('content')
<div class="container">
  
    <div class="row">
        <div class="col-md-6">
            <h2>{{ucfirst($type) }}</h2>
        </div>
        <div class="col-md-6" style="text-align:right">
            <a href="/admin/queries/download/{{$type}}" class="btn btn-primary">Download Excel</a>
        </div>
    </div>

    
    @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
    <table class="table  table-responsive table-striped table-bordered">
        <tr>
            <th>ID</th>
            @if($type!='newsletter')
            <th>Name</th>
            <th>Phone</th>
            <th>Message</th>
            @if($type=='careers')
            <th>Resume</th>
            @endif
            <th>Type</th>
            @endif
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($items as $item)
                
        <tr>
            <td>{{$item->id}}</td>
            @if($type!='newsletter')
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->message}}</td>
            @if($type=='careers')
            <th> @if($item->resume!="")
                <a href="{{asset('resume/'.$item->resume)}}" class="btn btn-warning">Download</a>
                @else
                No Resume Uploaded
                @endif
            </th>
            @endif
            <th>{{$item->others}}</th>
            @endif
            <td>{{$item->email}}</td>
            <td>
                    {{ Form::open([
                        'method'=>'DELETE',
                        'url' => ['admin/queries',$item->type, $item->id],
                        'style' => 'display:inline'
                    ]) }}
                        {{ Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-outline-danger',
                                'title' => 'Delete Query',
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