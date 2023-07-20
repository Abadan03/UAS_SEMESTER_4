<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    @include('layouts.nav')
    <div class="min-vw-100">
        @yield('content')
    </div>
    @vite('resources/js/app.js')
</body>
</html>
