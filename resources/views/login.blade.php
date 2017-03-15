@extends('layout.app')

@section('content')

<div class="row">
	<section class="col-sm-6">

			<h3>Login de Usuario</h3>
			@if(count($errors)>0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
					<ul class="list-unstyled">
					<li>
						{{$error}}
					</li>
					@endforeach
					</ul>
				</div>
				@endif
			
			<form action="login" method="post" role="form">
				<div class="form-group">
					<label for="email">email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<input type="submit" value="nuevo usuario" class="btn btn-success">
				{{csrf_field()}}
			</form>
		</section>
</div>

@endsection