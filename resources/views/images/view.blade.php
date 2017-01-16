@extends("layouts.layoutgallery")
@section("content")
<style type="text/css">
           .grid-item {
                        width: 200px;
                        float: left;

                      }
          .grid-item img{
              width: 190px;

          }

</style>
<div class="row grid">
  {!! Form::open(['route'=> 'getimport','method'=>'post', 'class'=>'form-horizontal', 'role'=>'form', 'enctype' => 'multipart/form-data']) !!}
  <div class="form-group">
    {!! Form::label('import_file', 'import_file', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-2">
      {!! Form::file('import_file') !!}
    </div>
    <div class="call-lg-4">
        {!! Form::submit('import', array('class' => 'btn btn-raised btn-primary')) !!}
    </div>
    <div class="clear"></div>
  </div>
  {!! Form::close () !!}
@foreach ($image as $data => $value)

<div class="grid-item">
  <div>
      {!! Html::image('upload_images/'.$value->image) !!}
  </div>
  <div>
      {!! Form::hidden('id', $value->id )  !!}
    <h3>{!! $value->title !!}</h3><br>
    <p>{!! $value->Description !!}<br>
      {!! link_to(route('detailimage', $value->id), "detail", ['class'=>"btn btn-primary"]) !!}
      {!! link_to(route('export', $value->id), "export", ['class'=>"btn btn-warning"]) !!}

    </p>
  </div>

</div>

@endforeach
</div>
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script>
$('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  // columnWidth: 160
});
</script>
@stop
