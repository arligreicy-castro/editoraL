@extends('layouts.layout')
@section('content')
		<table>
			<tr>
				<th>Código</th>
				<th>Descritivo</th>
				<th>Ações</th>
			</tr>
			@foreach($dados as $genero)
				<tr>
					<td>{{$genero->id}}</td>
					<td>{{$genero->descritivo}}</td>
					<td>
						<a href='/alterar/{{$genero->id}}'>Alterar</a>
						<a href='/deletar/{{$genero->id}}'>Excluir</a>
						
					</td>
				</tr>
			@endforeach
		</table>
		<a href='inserir'>Novo Gênero</a>
@endsection