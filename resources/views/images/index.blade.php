@extends("layouts.application")
@section("content")

  <h1>Add Image</h1>

  {!! Form::open(['route'=> 'uploadstore', 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data']) !!}

      <div class="form-group">
        {!! Form::label('image', 'image', array('class' => 'col-lg-3 control-label')) !!}
        <div class="col-lg-9">
          {!! Form::file('image') !!}
          {!! $errors->first('image') !!}

        </div>
        <div class="clear"></div>
      </div>

      <div class="form-group">
        {!! Form::label('title', 'title', array('class' => 'col-lg-3   control-label')) !!}
        <div class="col-lg-9">
          {!! Form::text('title', null, array('class' => 'form-control', 'autofocus' => 'true')) !!}
          {!! $errors->first('title') !!}
        </div>
        <div class="clear"></div>
      </div>

      <div class="form-group">
        {!! Form::label('Description', 'Description', array('class' => 'col-lg-3 control-label')) !!}
        <div class="col-lg-9">
          {!! Form::textarea('Description', null, array('class' => 'form-control', 'rows' => 3)) !!}
          {!! $errors->first('Description') !!}
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
