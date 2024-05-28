@extends('layouts.layout')
@section('content')
<h1>Livro</h1>
<form action="/update_livro/{{$livro->id}}" method="post">
    @csrf
    <label>Gênero:</label>
        <select name="genero_id">
        @foreach($generos as $genero)
             @if($genero->id == $livro->genero_id)
                <option value="{{$genero->id}}" selected>
                {{$genero->descritivo}}</option>
            @else
                 <option value="{{$genero->id}}">
                 {{$genero->descritivo}}</option>
            @endif
        @endforeach
        </select>
    <br><br>
    <label>Título</label>
    <input type="text" name="titulo" value="{{$livro->titulo}}">
    <br><br>
    <label>Sinopse</label><br>
    <textarea name="sinopse" value="{{$livro->sinopse}}"></textarea>
    <br><br>
    <input type="submit" value="Atualizar">
</form>

@endsection