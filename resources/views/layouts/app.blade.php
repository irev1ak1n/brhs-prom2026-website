<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Prom 2026')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/core/global.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/components/clt.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/prom-info.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">


</head>
<body>
@yield('content')

<script src="{{ asset('js/app.js') }}"></script>

<script
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&loading=async&callback=initPromMap&libraries=marker"
    async
    defer
></script>

<script src="{{ asset('js/prom-map.js') }}"></script>

</body>
</html>
