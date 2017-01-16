@extends("layouts.application")
@section("content")

  <h1>Data Article</h1>

  <br>

  @foreach ($article as $value=> $article)
   <div>
     <h1>{!! $article->nama  !!}</h1>
     <p>{!! $article->content !!}</p>

     <div>
       {!! link_to('articles/'.$article->id, 'Show', array('class' => 'btn btn-info')) !!}
       {!! link_to('articles/'.$article->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}

       <!-- {!! link_to('articles/'.$article->id, 'Delete', array('class' => 'btn btn-danger', 'method' => 'DELETE', "onclick" => "return confirm('are you sure?')")) !!} -->
       {!! Form::open(array('route' => array('articles.destroy', $article->id), 'method' => 'delete')) !!}
       {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
       {!! Form::close() !!}
     </div>
   </div>

   @endforeach


  @stop
