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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/core/global.css') }}">

    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/mobile-navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/newsletter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/prom-info.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/spirit-week.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/insta-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/ad.css') }}">

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

<!-- MailerLite Universal -->
<script>
    (function(w,d,e,u,f,l,n){w[f]=w[f]||function(){(w[f].q=w[f].q||[])
        .push(arguments);},l=d.createElement(e),l.async=1,l.src=u,
        n=d.getElementsByTagName(e)[0],n.parentNode.insertBefore(l,n);})
    (window,document,'script','https://assets.mailerlite.com/js/universal.js','ml');
    ml('account', '2047723');
</script>
<!-- End MailerLite Universal -->

<body>

@include('components.navbar')

@yield('content')

@yield('scripts')

@include('components.footer')

<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/gallery.js') }}"></script>
<script src="{{ asset('js/tickets.js') }}"></script>
<script src="{{ asset('js/components/navbar.js') }}"></script>
<script async src="//www.instagram.com/embed.js"></script>

</body>
</html>
