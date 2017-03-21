@extends('layout.app')

@section('title','usuarios')

@section('content')
<div class="container">
  <h2>Lista de Usuarios</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Mensaje</th>
        <th>Autor</th>
        <th>Fecha Creacion</th>
      </tr>
    </thead>
    <tbody>
	@foreach($notas as $nota)
		<tr>
			<td>{{$nota->titulo}}</td>
			<td>{{$nota->cuerpo}}</td>
			<td>{{$nota->user->name}}</td>
			<td>{{$nota->created_at}}</td>
		</tr>
	@endforeach
	 </tbody>
  </table>
</div>
@stop
