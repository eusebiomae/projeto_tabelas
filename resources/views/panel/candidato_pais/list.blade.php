@extends('panel.layouts.app')

@section('title', 'Candidato_Pais')

@section('content')
<br>
<table class="table">
	<thead class="thead-light">
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Sigla</th>
			<th scope="col">Nome</th>
		</tr>
	</thead>

	@foreach ($user as $item)

		<tbody>
			<tr>

				<td>{{$item->id}}</td>
				<td>{{$item->sigla}}</td>
				<td>{{$item->name}}</td>

				<td>
					@if (isset($item->candidato_pais))
						{{$item->candidato_pais->name}}
					@endif
				</td>

				@if ($item->deleted_at!=null)

					@if (Auth::candidato_pais()->can('restore-candidato_pais', $item) && !$item->deleted_at)
					<td><a href="/panel/candidato_pais/restore/{{$item->id}}"> <button type="button" class="btn btn-warning"> Restaurar </button></a> </td>
					@endif

					<td>Foi excluido</td>

					@else

					@if (Auth::candidato_pais()->can('form-candidato_pais', $item) && !$item->deleted_at)
					<td><a href="/panel/candidato_pais/update/{{$item->id}}"> <button type="button" class="btn btn-primary"> Editar </button> </a> </td>
					@endif

					@if (Auth::candidato_pais()->can('delete-candidato_pais', $item) && !$item->deleted_at)
					<td><a href="/panel/candidato_pais/delete/{{$item->id}}"> <button type="button" class="btn btn-danger"> Deletar </button> </a> </td>
					@endif

				@endif

			</tr>
		</tbody>

	@endforeach


</table>

@if (Auth::candidato_pais()->can('save-candidato_pais', $item) && !$item->deleted_at)
<a href="/panel/candidato_pais/insert"> <button type="button" class="btn btn-success"> Novo </button> </a>
@endif
@endsection
