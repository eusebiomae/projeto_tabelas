@extends('panel.layouts.app')

@section('title', 'Candidato_Pais')

@section('content')

<br>
	<form action="/panel/candidato_pais/save" method="post">
		@csrf
		<input type="hidden" name="id" value="{{is_null($candidato_pais) ? '' : $candidato_pais->id}}">

		<div class="row">
			<div class="col">
				<input type="text" class="form-control" name="name" placeholder="Nome" value="{{is_null($candidato_pais) ? '' : $candidato_pais->name}}">
			</div>

			<div class="col">
				<input type="text" class="form-control" name="sigla" placeholder="Sigla" value="{{is_null($candidato_pais) ? '' : $candidato_pais->sigla}}">
			</div>
		</div>
		<br>

		<input class="btn btn-primary" type="submit" value="Enviar">

	</form>

@endsection
