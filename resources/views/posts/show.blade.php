@extends('layouts/main')
@section('header-title')
<h1>{{$post->title}}</h1>
@endsection()
@section('content')

<h1>{{$post->title}}</h1>
<p>{{$post->anons}}</p>
<p>{{$post->text}}</p>
<a href="{{ route ('posts.one.edit', $post->id )}}">Редактировать</a>
<a href="{{ route ('posts.one.delete', $post->id )}}">Delete</a>
