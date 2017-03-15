@extends('layout.app')

@section('title', 'Post')

@section('content')
    @foreach($posteos as $post)
		<h3>titulo:{{$post->title}}</h3>
		<p>cuerpo:{{$post->body}}</p>
		{{--<p>autor:{{$post->user_id}}</p>--}}
		<p>Autor: {{$post->user->name}}</p>
		<?php echo $post->id ?>
	@endforeach
@stop