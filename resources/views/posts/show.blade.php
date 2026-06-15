@extends('layouts/main')
@section('header-title')
<h1>{{$post->title}}</h1>
@endsection()
@section('content')

<h1>{{$post->title}}</h1>
<p>{{$post->text}}</p>
