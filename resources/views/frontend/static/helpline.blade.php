@extends('layouts.frontend.main')

@section('head')
<style>
        table tr td p a span{
            display: none;
        }
        </style>
@endsection

@section('content')



    <div class="container">
        
            {!! $content !!}
            
    </div>
@endsection