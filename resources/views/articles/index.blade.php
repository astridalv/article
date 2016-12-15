@extends("layouts.application")
@section("content")
  <h1>TEST crud</h1>
  <a href="{!! route('articles.create') !!}">create article</a>
  <br>

<table>
  <tr>
    <td>Judul Article</td>
    <td>content Article</td>
    <td>aksi</td>
  </tr>
  @foreach($article as $data => $value)
  <tr>

    <td>{{ $value->nama  }}</td>
    <td>{{ $value->content }}</td>
    <td>
      
      <a href="{{ URL('articles/' . $value->id. '/edit' )}}">edit</a>
      {!! Form::open(['route'=> ['articles.destroy', $value->id],  'method' => 'DELETE', 'role'=>'form']) !!}
      {!! Form::submit('hapus data', ['class'=>"btn btn-denger", 'onclick'=>"if(!confirm('hapus?')){return false;}"]) !!}
      {!! Form::close() !!}
    </td>

  </tr>
    @endforeach
</table>

  @stop
