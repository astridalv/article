@extends("layouts.application")
@section("content")

{!! Form::open(['route'=> ['reporter.update', $data->id], 'class'=>'form-horizontal', 'method' => 'PUT', 'role'=>'form']) !!}

  <h1>Edit crud</h1>
  {!! Form::hidden('id', $data->id )  !!}
  <div class="form-group">
    {!! Form::label('reporterid', 'ID', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('reporterid', $data->reporterid , array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('reporterid') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    {!! Form::label('nama', 'nama', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('nama', $data->nama , array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('nama') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    {!! Form::label('jeniskelamin', 'gender', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('jeniskelamin', $data->jeniskelamin , array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('nama') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    {!! Form::label('alamat', 'address', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('alamat', $data->alamat , array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('alamat') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group">
    {!! Form::label('image', 'image', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('image', $data->image , array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('image') !!}
    </div>
    <div class="clear"></div>
  </div>

<div class="form-group">
  <div class="col-lg-3"></div>
  <div class="col-lg-9">
    {!! Form::submit('update', array('class' => 'btn btn-raised btn-primary')) !!}
    {!! link_to(route('reporter.index'), "Back", ['class' => 'btn btn-raised btn-info']) !!}
  </div>
  <div class="clear"></div>
</div>


{!! Form::close () !!}

@stop
