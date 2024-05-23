@extends('layouts.layout')
@section('content')
@csrf
<h1>Novo Livro</h1>
<form action="/cadastrar_livro/{id}" method="post">
    @csrf
    <label>Título</label>
    <input type="text" name="titulo">
    <br><br>
    <label>Sinopse</label>
    <input type="text" name="sinopse">
    <br><br>
    <input type="submit" value="Cadastrar">
</form>

@endsection