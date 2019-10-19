@csrf

<div class="row form-group {{ $errors->has('subcategory_id') ? 'has-error' : ''}}">
    {!! Form::label('subcategory_id', 'Select Sub Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select name="subcategory_id" id="subcategory_id" class="form-control">
            @foreach ($subcategories as $item)
                <option value="{{ $item->id }}"> {{ $item->name}}</option>
            @endforeach
        </select>
    </div>
</div> 

<div class="row form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name of Inner Category*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="row form-group {{ $errors->has('featured_image') ? 'has-error' : ''}}">
    {!! Form::label('featured_image', 'Featured Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('featured_image', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
        {!! $errors->first('featured_image', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>