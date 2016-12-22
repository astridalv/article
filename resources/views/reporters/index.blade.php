@extends("layouts.application")
@section("content")

  <h1>Data Reporter</h1>
{!! Form::open(['route'=> 'reporter.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}
  <div class="form-group">
    {!! Form::label('reporterid', 'ID', array('class' => 'col-lg-3   control-label')) !!}
    <div class="col-lg-9">
      {!! Form::text('reporterid', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}
      {!! $errors->first('reporterid') !!}
    </div>
    <div class="clear"></div>
  </div>

    <div class="form-group">
      {!! Form::label('nama', 'Name reporter', array('class' => 'col-lg-3   control-label')) !!}
      <div class="col-lg-9">
        {!! Form::text('nama', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}
        {!! $errors->first('nama') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      {!! Form::label('jeniskelamin', 'gender', array('class' => 'col-lg-3   control-label')) !!}
      <div class="col-lg-9">
       {!! Form::radio('jeniskelamin', 'Male', true) !!}{!! Form::label('Male', 'Male') !!} <br>
        {!! Form::radio('jeniskelamin', 'Female') !!}{!! Form::label('Female', 'Female') !!}
        {!! $errors->first('jeniskelamin') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      {!! Form::label('alamat', 'Address', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
        {!! Form::textarea('alamat', null, array('class' => 'form-control', 'rows' => 3)) !!}
        {!! $errors->first('alamat') !!}
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      {!! Form::label('image', 'image', array('class' => 'col-lg-3 control-label')) !!}
      <div class="col-lg-9">
        {!! Form::file('image') !!}
        {!! $errors->first('image') !!}

      </div>
      <div class="clear"></div>
    </div>

    <div class="form-group">
      <div class="col-lg-3"></div>
      <div class="col-lg-9">
        {!! Form::submit('Save', array('class' => 'btn btn-raised btn-primary')) !!}
        {!! Form::reset('Clear form', ['class' => 'btn btn-raised btn-danger']) !!}
      </div>
      <div class="clear"></div>
    </div>
{!! Form::close () !!}
  @stop
