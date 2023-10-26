<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title', 'DC Comics')</title>

    <!-- Logo Title -->
    <link rel="icon" href="{{Vite::asset('resources/img/dc-logo.png')}}" type="image/png">

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('layout.partials.header')

    <main>
        @yield('content')
    </main>

</body>

</html>