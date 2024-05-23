@extends('layouts.layout')
@section('content')
<h1>Genero</h1>
<form action="/update/{{$genero->id}}" method="post">
    @csrf
    <label>Descritivo</label>
    <input type="text" name="descritivo" value="{{$genero->descritivo}}">
    <br><br>
    <input type="submit" value="Atualizar">
</form>

@endsection