@extends('layout.app')

@section('title', 'Home')

@section('content')
    
	<form action="/nota" method="post">
		<fieldset>
		{!! csrf_field() !!}
			<legend>Nota</legend>
			<div class="form-group">
			<label>Titulo</label>
			<input type="text" name="titulo" class="form-control"><br></div>
			<div class="form-group">
			<label>Mensaje</label>
			<textarea name="nota" cols="30" rows="10" class="form-control"></textarea>
			</div>
			<input type="submit" value="Guardar Nota" class="btn btn-primary btn-lg">
		</fieldset>
	</form>
	<button class="btn btn-default"><a href="crearNota">Borrar</a></button>

@endsection