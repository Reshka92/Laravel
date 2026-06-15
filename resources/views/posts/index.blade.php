@extends('layouts/main')
@section('header-title')
Posts


@endsection()
@section('content')
Posts-POsTSSSS
@foreach($posts as $el)
<p>{{$el->title}}</p>
<p><a href="{{ route('posts.one', $el->id) }}">Детальнее</a></p>
@endforeach
@endsection