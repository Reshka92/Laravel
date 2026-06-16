@extends('layouts/main')
@section('header-title')
Edit Posts
@endsection()
@section('content')
    @if($errors->any())
    <div class="block-error">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div>
    <h1>Edit Posts</h1>
    <form action="{{ route('posts.edit', $post->id) }}" method="POST">
        @csrf

        <label for="title">Name</label>
        <input type="text" placeholder="Имя" id="title" name="title" value="{{ $post->title }}">

        <label for="anons">Anons</label>
        <input type="text" placeholder="anons" id="anons" name="anons" value="{{ $post->anons }}">
 >

        <label for="text">text</label>
        <input type="text" placeholder="text" id="text" name="text" value="{{ $post->text }}">
>

        <button type="submit">Edit</button>
    </form>
</div>

@endsection
