<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BRHS | PROM 2026')</title>

    {{--    <link rel="icon" type="image/jpeg" href="{{ asset('images/icon-v6.jpg') }}">--}}
    <link rel="icon" type="image/jpeg" href="{{ asset('images/icon-v5.webp') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/core/global.css') }}">

    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/prom-info.css') }}">

    <link rel="stylesheet" href="{{ asset('css/pages/faq.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/night-guide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/tickets.css') }}">

    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
</head>
<body>

@include('components.navbar')

@yield('content')

@yield('scripts')

@include('components.footer')

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
