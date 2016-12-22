@extends("layouts.application")
@section("content")

  <h1>Data Article</h1>

  <br>

<table class="table">
  @foreach($article as $data => $value)
  <tr>
    <td><h3>Judul Article</h3></td>
    <td><h3>content Article</h3></td>
    <td><h3>aksi</h3></td>
  </tr>

  <tr>

    <td>{{ $value->nama  }}</td>
    <td>{{ $value->content }}</td>
    <td>
      {!! Form::open(['route'=> ['articles.edit', $value->id],  'method' => 'get', 'role'=>'form']) !!}
      {!! Form::submit('update data', ['class'=>"btn btn-primary"]) !!}
      {!! Form::close() !!}


      {!! Form::open(['route'=> ['articles.destroy', $value->id],  'method' => 'DELETE', 'role'=>'form']) !!}
      {!! Form::submit('delete', ['class'=>"btn btn-danger", 'onclick'=>"if(!confirm('hapus?')){return false;}"]) !!}
      {!! Form::close() !!}
    </td>

  </tr>
    @endforeach
</table>

  @stop
