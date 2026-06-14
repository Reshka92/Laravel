@extends('layouts/main')
@section('header-title')
Posts


@endsection()
@section('content')
Posts-POsTSSSS
@foreach($posts as $el)
<p>{{$el->title}}</p>
@endforeach
@endsection