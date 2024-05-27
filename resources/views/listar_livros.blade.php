@extends('layouts.layout')
@section('content')
		<table>
			<tr>
				<th>Título</th>
                <th>Sinopse</th>
				<th>Genero</th>
				<th>Ações</th>
			</tr>
			@foreach($livros as $livro)
				<tr>
					<td>{{$livro->titulo}}</td>
					<td>{{$livro->sinopse}}</td>
                    <td>{{$livro->descritivo}}</td>
					<td>
						<a href='/alterar_livro/{{$livro->id}}'>Alterar</a>
						<a href='/deletar_livro/{{$livro->id}}'>Excluir</a>
						
					</td>
				</tr>
			@endforeach
		</table>
		<a href='inserir_livro'>Novo Livro</a>
@endsection