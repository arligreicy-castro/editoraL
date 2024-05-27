@extends('layouts.layout')
@section('content')
@csrf
<h1>Novo Livro</h1>
<form action="/cadastrar_livro" method="post">
    @csrf
    <label>Gênero:</label>
        <select name="genero_id">
        @foreach($generos as $genero)
            <option value="{{$genero->id}}">
                {{$genero->descritivo}}</option>
    @endforeach
    </select>
    <br><br>
    <label>Título</label>
    <input type="text" name="titulo">
    <br><br>
    <label>Sinopse</label><br>
    <textarea name="sinopse"></textarea>
    <br><br>
    <input type="submit" value="Cadastrar">
</form>

@endsection