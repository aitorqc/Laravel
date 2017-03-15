@extends('layout.app')

@section('title', 'Home')

@section('content')
    
	<div class="row">
		<section class="col-sm-6">
			<h3>Registro de Usuarios</h3>
			<form action="nuevoUsuario" method="post" role="form">
				<div class="form-group">
					<label for="name">Nombre</label>
					<input type="text" name="nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" value="nuevo usuario" class="btn btn-success">
				<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
				{{csrf_field()}}
			</form>
		</section>
	</div>

@endsection