<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prom 2026')</title>

    <link rel="stylesheet" href="{{ asset('css/core/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
</head>
<body>
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
