@extends('layouts.layout')
@section('content')
<h1>Livro</h1>
<form action="/update_livro/{{$livro->id}}" method="post">
    @csrf
    <label>Título</label>
    <input type="text" name="titulo" value="{{$livro->titulo}}">
    <br><br>
    <label>Sinopse</label>
    <input type="text" name="sinopse" value="{{$livro->sinopse}}">
    <br><br>
    <input type="submit" value="Atualizar">
</form>

@endsection