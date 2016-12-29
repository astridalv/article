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
