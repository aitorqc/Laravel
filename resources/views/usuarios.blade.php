@extends('layout.app')

@section('title','usuarios')

@section('content')

	@foreach($usuarios as $usuario)
		<h3>Nombre:{{$usuario->name}}</h3>
		<p>Email:{{$usuario->email}}</p>
		<?php echo $usuario->id ?>
	@endforeach

@stop