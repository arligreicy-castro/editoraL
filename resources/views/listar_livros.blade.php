@extends('layouts.layout')
@section('content')
		<table>
			<tr>
				<th>Código</th>
				<th>Título</th>
                <th>Sinopse</th>
				<th>Ações</th>
			</tr>
			@foreach($dados as $livro)
				<tr>
					<td>{{$livro->id}}</td>
					<td>{{$livro->titulo}}</td>
                    <td>{{$livro->sinopse}}</td>
					<td>
						<a href='/alterar_livro/{{$livro->id}}'>Alterar</a>
						<a href='/deletar_livro/{{$livro->id}}'>Excluir</a>
						
					</td>
				</tr>
			@endforeach
		</table>
		<a href='inserir_livro'>Novo Gênero</a>
@endsection