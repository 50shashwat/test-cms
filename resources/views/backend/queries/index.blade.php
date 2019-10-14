@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>{{ucfirst($type) }}</h2>
    <table class="table table-striped table-bordered">
        <tr>
            <th>S.No.</th>
            @if($type!='newsletter')
            <th>Name</th>
            <th>Phone</th>
            <th>Message</th>
            @endif
            <th>Email</th>
        </tr>
        @foreach ($items as $item)
                
        <tr>
            <td>{{$item->id}}</td>
            @if($type!='newsletter')
            <td>{{$item->name}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->message}}</td>
            @endif
            <td>{{$item->email}}</td>
        </tr>
        @endforeach
    </table>

    
    {{ $items->links() }}

</div>
    
@endsection