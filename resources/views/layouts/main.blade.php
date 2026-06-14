<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('header-title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav>
            <li><a href="{{ route('home') }}">home</a></li>
            <li><a href="{ route('about') }}">about</a></li>
            <li><a href="{ route('contacts') }}">contacts</a></li>
            <li><a href="{ route('posts') }}">posts</a></li>
        </nav>
    </header>
    @yield('content')
</body>
</html>