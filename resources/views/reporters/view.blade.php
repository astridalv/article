@extends("layouts.application")
@section("content")

  <h1>Data </h1>

  <br>

<table class="table">

  <tr>
    <td><h3>ID</h3></td>
    <td><h3>Nama</h3></td>
    <td><h3>Jenis kelamin</h3></td>
    <td><h3>alamat</h3></td>
    <td><h3>image</h3></td>
    <td><h3>aksi</h3></td>
  </tr>
@foreach($reporter as $data => $value)
  <tr>

    <td>{{ $value->reporterid  }}</td>
    <td>{{ $value->nama }}</td>
    <td>{{ $value->jeniskelamin  }}</td>
    <td>{{ $value->alamat }}</td>
    <td>{{ $value->image }}</td>
    <td>
      {!! Form::open(['route'=> ['reporter.edit', $value->id],  'method' => 'get', 'role'=>'form']) !!}
      {!! Form::submit('Update', ['class'=>"btn btn-primary"]) !!}
      {!! Form::close() !!}

    </td>

  </tr>
    @endforeach
</table>

  @stop
