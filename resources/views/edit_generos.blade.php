@extends('layouts.layout')
@section('content')
<h1>Genero</h1>
<form action="\update\{{$genero->id}}" method="post">
    @csrf
<form action="\cadastrar" method="post">
    <label>Descritivo</label>
    <input type="text" name="descritivo">
    <br><br>
    <input type="submit" value="Atualizar">
</form>

@endsection