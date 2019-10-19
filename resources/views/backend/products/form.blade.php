@csrf

<div class="row form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Select Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $item)
                <option value="{{ $item->id }}"> {{ $item->name}}</option>
            @endforeach
        </select>
    </div>
</div> 

<div class="row form-group {{ $errors->has('subcategory_id') ? 'has-error' : ''}}">
    {!! Form::label('category_id', 'Select Sub Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select name="subcategory_id" id="category_id" class="form-control">
            <option value="">Select None</option>
            @foreach ($subcategories as $item)
                <option value="{{ $item->id }}"> {{ $item->name}}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="row form-group {{ $errors->has('innercategory_id') ? 'has-error' : ''}}">
    {!! Form::label('innercategory_id', 'Select Inner Category', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select name="innercategory_id" id="innercategory_id" class="form-control">
            <option value="">Select None</option>
            @foreach ($innercategories as $item)
                <option value="{{ $item->id }}"> {{ $item->name}}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="row form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Name of Product*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="row form-group {{ $errors->has('featured_image1') ? 'has-error' : ''}}">
    {!! Form::label('featured_image1', 'Featured Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('featured_image1', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
        {!! $errors->first('featured_image1', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="row">
    <label for="content">Description</label> <br />
    <br />
    <textarea id="editor" class="form-control" name="content" class="summernote"></textarea>
    
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>