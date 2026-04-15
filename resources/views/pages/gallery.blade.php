@extends('layouts.app')

@section('title', 'Gallery | BRHS Prom 2026')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/gallery.css') }}">
@endpush

@section('content')
    <section class="gallery-hero">
        <div class="gallery-hero-overlay"></div>

        <div class="container gallery-hero-content">
            <p class="gallery-kicker">BRHS Prom 2026</p>
            <h1>Gallery</h1>
            <p class="gallery-subtitle">
                See the venue. See the vibe. See what makes
                <span>A Night in Las Vegas unforgettable.</span>
            </p>
        </div>
    </section>

    <section class="gallery-page">
        <div class="container">
            <div class="gallery-mosaic">
                <article class="gallery-item feature">
                    <img src="{{ asset('images/gallery/place1.jpg') }}" alt="Prom venue atmosphere">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/building.png') }}" alt="Prom venue exterior">
                </article>

                <article class="gallery-item no-crop poster">
                    <img src="{{ asset('images/gallery/prom2026.png') }}" alt="Prom 2026 detail">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom11.jpg') }}" alt="Prom 11">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom12.jpg') }}" alt="Prom 12 ">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom13.jpg') }}" alt="Prom 13 ">
                </article>

                <article class="gallery-item tall-xl">
                    <img src="{{ asset('images/gallery/event2.png') }}" alt="Interior event space">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom10.jpg') }}" alt="Prom 10">
                </article>

                <article class="gallery-item wide-md">
                    <img src="{{ asset('images/gallery/event3.png') }}" alt="Dance floor area">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/overview1.png') }}" alt="Room overview">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom9.jpg') }}" alt="Prom 9">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/tickets.png') }}" alt="Prom tickets">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom14.jpg') }}" alt="Prom 14">
                </article>

                <article class="gallery-item sm">
                    <img src="{{ asset('images/gallery/promcom1.jpg') }}" alt="Prom 1">
                </article>

                <article class="gallery-item sm">
                    <img src="{{ asset('images/gallery/promcom2.jpg') }}" alt="Prom 2 ">
                </article>

                <article class="gallery-item tall">
                    <img src="{{ asset('images/gallery/promcom4.jpg') }}" alt="Prom 4">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/promcom5.jpg') }}" alt="Prom 5">
                </article>

                <article class="gallery-item sm">
                    <img src="{{ asset('images/gallery/promcom3.jpg') }}" alt="Prom 3">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom6.jpg') }}" alt="Prom 6">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/karaoke.png') }}" alt="Karaoke area">
                </article>

                <article class="gallery-item wide-lg">
                    <img src="{{ asset('images/gallery/karaoke2.png') }}" alt="Seating and activity area">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/karaoke3.png') }}" alt="Stage and lighting area">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom7.jpg') }}" alt="Prom 7">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/karaoke4.png') }}" alt="Interior lounge view">
                </article>

                <article class="gallery-item tall-xl">
                    <img src="{{ asset('images/gallery/karaoke5.png') }}" alt="Entertainment room">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom8.jpg') }}" alt="Prom 8">
                </article>

                <article class="gallery-item no-crop poster">
                    <img src="{{ asset('images/gallery/will-you.png') }}" alt="Prom detail graphic">
                </article>

                <article class="gallery-item no-crop poster">
                    <img src="{{ asset('images/gallery/breaking-news.png') }}" alt="Prom detail announcement">
                </article>
            </div>
        </div>
    </section>
@endsection
