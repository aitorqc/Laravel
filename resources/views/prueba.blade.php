@extends('layout.app')

@section('title', 'pruebas')

@section('sidebar')
    @parent

    <p>Hola {{$nombre}}</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection