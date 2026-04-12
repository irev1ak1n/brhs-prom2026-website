<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BRHS | PROM 2026')</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5C5P16PD0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-Q5C5P16PD0');
    </script>

    {{--    <link rel="icon" type="image/jpeg" href="{{ asset('images/icon-v6.jpg') }}">--}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

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
    <link rel="stylesheet" href="{{ asset('css/pages/gallery.css') }}">

    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">

    <meta name="google-site-verification" content="wHnDjK5ioRYbTyrndO-W0HZG0jhdBn_7HNgh6DbsjO4" />

    <meta name="description" content="
    Official Ballantyne Ridge High School Prom 2026 website.
    Tickets, location, time, and event details for BRHS prom.
    ">
</head>
<body>

@include('components.navbar')

@yield('content')

@yield('scripts')

@include('components.footer')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/gallery.js') }}"></script>
<script src="{{ asset('js/tickets.js') }}"></script>
<script src="{{ asset('js/components/navbar.js') }}"></script>

</body>
</html>
