@csrf

@if($popup->image_url!="")
<div class="row" style="padding:20px">
    <label  class="forn-control" style="display:block; width:100%">Previous Popup</label> <br>
    @if($popup->is_image)
        <img src="{{asset('images/'.$popup->image_url)}}" style="width:50%;height:auto" />
    @else 
        <iframe width="560" height="315" src="{{$popup->video_url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    @endif
</div>
@endif

<div style="padding:20px">
    {!! Form::label('is_active', 'Enable', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select name="is_active"  class="form-control">
            <option value="1" @if( $popup->is_active == 1) selected  @endif> Activate</option>
            <option value="0" @if( $popup->is_active == 0) selected  @endif> De-Activate</option>
        </select>
    </div>
    <br>
    {!! Form::label('is_image', 'Popup Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <select name="is_image"  class="form-control" id="video_or_image">
            <option value="1" @if( $popup->is_image == 1) selected  @endif> Image</option>
            <option value="0" @if( $popup->is_image == 0) selected  @endif> Video</option>
        </select>
    </div>
    <br>
    <div id="video">
        {!! Form::label('video_url', 'Enter Embedded Video URL (Youtube/Vimeo)', ['class' => 'col-md-6 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('video_url', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
            {!! $errors->first('video_url', '<p class="help-block">:message</p>') !!}
        </div>
        <br />
        <a href="/videos/how_to.mkv" >Click Here</a> To Know How To Upload Youtube Video 
    </div>

</div>

<div style="padding: 20px;">
    <div class=" form-group {{ $errors->has('image_url') ? 'has-error' : ''}}" style="margin-top: 20px;border: 1px solid grey;border-radius: 8px;padding:10px; inline-block">
        {!! Form::label('image_url', 'Browse Popup Image', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::file('image_url', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
            {!! $errors->first('image_url', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>