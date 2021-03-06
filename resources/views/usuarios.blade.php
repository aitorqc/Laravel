@extends('layout.app')

@section('title','usuarios')

@section('content')
<div class="container">
  <h2>Lista de Usuarios</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Nombre Completo</th>
        <th>Email</th>
        <th>Fecha Creacion</th>
      </tr>
    </thead>
    <tbody>
	@foreach($usuarios as $usuario)
		<tr>
			<td>{{$usuario->name}} {{$usuario->lastName}}</td>
			<td>{{$usuario->email}}</td>
			<td>{{$usuario->created_at}}</td>
		</tr>
	@endforeach
	 </tbody>
  </table>
</div>
@stop
