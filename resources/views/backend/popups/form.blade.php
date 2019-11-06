@csrf

@if($popup->image_url!="")
<div class="row">
    <label>Previous Popup</label>
    <img src="{{asset('images/'.$popup->image_url)}}" style="width:100%;height:auto" />
</div>
@endif

<div class="row form-group {{ $errors->has('image_url') ? 'has-error' : ''}}">
    {!! Form::label('image_url', 'Popup Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image_url', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
        {!! $errors->first('image_url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@if($popup->image_url!="")
<div class="row">
<img src="{{asset('images/'.$popup->image_url)}}" style="width:100%;height:auto" />
</div>
@endif

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>