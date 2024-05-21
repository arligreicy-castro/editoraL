@extends('layouts.layout')
@section('content')
<h1>Genero</h1>
@csrf
<form action="\cadastrar" method="post">
    <label>Descritivo</label>
    <input type="text" name="descritivo">
    <br><br>
    <input type="submit" value="cadastrar">
</form>

@endsection