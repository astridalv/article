@extends("layouts.application")
@section("content")

    <div>
    {!! Html::image('upload_images/'.$value->image) !!}
    <h1>{!! $value->title !!}</h1>
    <p>{!! $value->Description !!}</p>
    </div>
    {!! link_to('updateimage/'.$value->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
    {!! Form::open(array('route' => array('images.destroy', $value->id), 'method' => 'delete')) !!}
    {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
    {!! Form::close() !!}
  <div>
  <h3><i><u>Give Comments</u></i></h3>
  {!! Form::open(['route' => 'comment.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

    <div class="form-group">
      {!! Form::hidden('upload_id', 'Title', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
    {!! Form::hidden('upload_id', $value->id, array('class' => 'form-control', 'readonly')) !!}
      </div>
      <div class="clear"></div>
    </div>
    <div class="form-group">
      {!! Form::label('subject', 'subject', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
    {!! Form::text('subject', null, array('class' => 'form-control')) !!}
      </div>
      <div class="clear"></div>
    </div>
    <div class="form-group">
      {!! Form::label('comment', 'comment', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
      {!! Form::textarea('comment', null, array('class' => 'form-control', 'rows' => 10, 'autofocus' => 'true')) !!}
        {!! $errors->first('comment') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
      </div>
      <div class="clear"></div>
    </div>
  {!! Form::close() !!}
  </div>
  @foreach($comments as $comment)

    <div>
      <div class="form-group">
        <h4>{!! Form::label('subject', $comment->subject, array('class' => 'col-lg-3 control-label')) !!}</h4><br>
        <p><i>{!! Form::label('comment', $comment->comment, array('class' => 'form-control')) !!}</p></i>

        <div class="clear"></div>
      </div>

    </div>

  @endforeach

@stop
