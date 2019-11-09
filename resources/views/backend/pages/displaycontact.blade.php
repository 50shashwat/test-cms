@extends('layouts.backend.app')

@section('content')
<div class="container">
    
<h2>Edit Contact Details</h2>
   <div class="card" style="padding:10px">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
        {!! Form::model($contact, [
            'method' => 'PATCH',
            'url' => ['/admin/displaycontact'],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

        @csrf


        <div style="padding:20px">
            <div class="row">
                {!! Form::label('phone1', 'Enter Phone 1', ['class' => 'col-md-6 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('phone1', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('phone1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br />

            <div class="row">
                {!! Form::label('phone2', 'Enter Phone 2', ['class' => 'col-md-6 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('phone2', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('phone2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br />

            <div class="row">
                {!! Form::label('address', 'Enter Address', ['class' => 'col-md-6 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::textarea('address', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br />

            
            <div class="row">
                {!! Form::label('email', 'Enter Company Email', ['class' => 'col-md-6 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::email('email', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br />

            
            <div class="row">
                {!! Form::label('city', 'Enter City', ['class' => 'col-md-6 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('city', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br />
                
            
            <div class="row">
                {!! Form::label('pincode', 'Enter Pincode', ['class' => 'col-md-6 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('pincode', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
                    {!! $errors->first('pincode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <br />
                

        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
        {!! Form::close() !!}
   </div>

</div>
    
@endsection