@extends("layouts.application")
@section("content")
<style type="text/css">
           .grid-item { width: 200px;
                        float: left;
                        margin: 0;
                        /*padding: 0;*/
                      }
          .wrapword{
          white-space: -moz-pre-wrap !important;  /* Mozilla, since 1999 */
          white-space: -webkit-pre-wrap; /*Chrome & Safari */
          white-space: -pre-wrap;      /* Opera 4-6 */
          white-space: -o-pre-wrap;    /* Opera 7 */
          white-space: pre-wrap;       /* css-3 */
          word-wrap: break-word;       /* Internet Explorer 5.5+ */
          word-break: break-all;
          white-space: normal;
          }
</style>
<div class="row grid">

@foreach ($image as $data => $value)
<div class="col-md-4 grid-item">
  <div>
      {!! Html::image('upload_images/'.$value->image) !!}
  </div>
  <div>
      {!! Form::hidden('id', $value->id )  !!}
    <h3>{!! $value->title !!}</h3><br>
    <p class="wrapword">{!! substr($value->Description,0,15) !!}<br>
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
   //columnWidth: 200
});
</script>
@stop
