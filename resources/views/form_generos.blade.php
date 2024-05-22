@extends('layouts.layout')
@section('content')
@csrf
<h1>Novo Genero</h1>
<form action="\cadastrar\{id}" method="post">
    @csrf
    <label>Descritivo</label>
    <input type="text" name="descritivo">
    <br><br>
    <input type="submit" value="Cadastrar">
</form>

@endsection