@csrf

<div class="row form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title ', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="row form-group {{ $errors->has('description') ? 'has-error' : ''}}">
        {!! Form::label('description', 'Title ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::textarea('description', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
            {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


<div class="row form-group {{ $errors->has('background_image') ? 'has-error' : ''}}">
    {!! Form::label('background_image', 'Background Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        @if(isset($banner) && $banner->background_image!="")
            <img src="{{ asset('images/') }}/{{$banner->background_image}}" style="width:100px;height:auto" />
        @endif
        {!! Form::file('background_image', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
        {!! $errors->first('background_image', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>