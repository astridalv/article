@extends("layouts.application")
@section("content")

{!! Form::open(['route'=> ['articles.update', $data->id], 'class'=>'form-horizontal', 'method' => 'PUT', 'role'=>'form']) !!}

  <h1>Edit crud</h1>
  {!! Form::hidden('id', $data->id )  !!}
<div class="form-group">
  {!! Form::label('nama', 'nama', array('class' => 'col-lg-3 control-label')) !!}
  <div class="col-lg-9">
    {!! Form::text('nama', $data->nama , array('class' => 'form-control', 'autofocus' => 'true')) !!}
    {!! $errors->first('nama') !!}
  </div>
  <div class="clear"></div>
</div>

<div class="form-group">
  {!! Form::label('content', 'content', array('class' => 'col-lg-3 control-label')) !!}
  <div class="col-lg-9">
    {!! Form::textarea('content',  $data->content, array('class' => 'form-control', 'rows' => 10)) !!}
    {!! $errors->first('content') !!}
  </div>
  <div class="clear"></div>
</div>

<div class="form-group">
  <div class="col-lg-3"></div>
  <div class="col-lg-9">
    {!! Form::submit('update', array('class' => 'btn btn-raised btn-primary')) !!}
    {!! link_to(route('articles.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
  </div>
  <div class="clear"></div>
</div>


{!! Form::close () !!}

@stop
