@extends('layouts/main')
@section('header-title')
Contacts Page
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
    <h1>Contact PAge</h1>
    <form action="{{ route('contact.post') }}" method="POST">
        @csrf

        <label for="name">Имя</label>
        <input type="text" placeholder="Имя" id="name" name="name" value="{{old('name')}}">

        <label for="email">Email</label>
        <input type="email" placeholder="email" id="email" name="email">

        <label for="subject">Тема</label>
        <input type="text" placeholder="subject" id="subject" name="subject">

        <label for="message">Сообщение</label>
        <textarea name="message" id="message" placeholder="message"></textarea>
        <button type="submit">Отправить</button>
    </form>
</div>

@endsection
