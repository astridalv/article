@extends("layouts.application")
@section("content")
<h1>Form Create</h1>

{!! Form::open(['route'=> 'articles.store', 'class'=>'form-horizontal', 'role'=>'form']) !!}
@include('articles.form')
{!! Form::close () !!}

@stop
