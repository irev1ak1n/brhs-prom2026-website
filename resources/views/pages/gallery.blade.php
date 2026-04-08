@extends('layouts.app')

@section('title', 'Gallery | BRHS Prom 2026')

@section('content')
    <section class="gallery-hero">
        <div class="gallery-hero-overlay"></div>

        <div class="container gallery-hero-content">
            <p class="gallery-kicker">BRHS Prom 2026</p>
            <h1>Gallery</h1>
            <p class="gallery-subtitle">
                A closer look at the theme, venue atmosphere, and prom inspiration for
                <span>A Night in Las Vegas</span>.
            </p>
        </div>
    </section>

    <section class="gallery-page">
        <div class="container">
            <div class="gallery-head">
                <div>
                    <p class="gallery-label">Prom Moments</p>
                    <h2>Visual Inspiration</h2>
                </div>

                <p class="gallery-description">
                    Explore featured visuals for the night. This page can later hold official event
                    photos, decorations, student highlights, and venue shots.
                </p>
            </div>

            <div class="gallery-filter-bar">
                <button class="gallery-filter-btn active" data-filter="all">All</button>
                <button class="gallery-filter-btn" data-filter="theme">Theme</button>
                <button class="gallery-filter-btn" data-filter="venue">Venue</button>
                <button class="gallery-filter-btn" data-filter="inspo">Inspiration</button>
            </div>

            <div class="gallery-grid" id="galleryGrid">
                <article class="gallery-card" data-category="theme">
                    <img src="{{ asset('images/gallery/gallery-1.jpg') }}" alt="Las Vegas themed prom lights">
                    <div class="gallery-card-content">
                        <span class="gallery-tag">Theme</span>
                        <h3>Vegas Lights</h3>
                        <p>Bright neon-inspired visuals for the prom atmosphere.</p>
                    </div>
                </article>

                <article class="gallery-card" data-category="venue">
                    <img src="{{ asset('images/gallery/gallery-2.jpg') }}" alt="Elegant prom venue interior">
                    <div class="gallery-card-content">
                        <span class="gallery-tag">Venue</span>
                        <h3>Venue Style</h3>
                        <p>A look at the elegant setting and event mood.</p>
                    </div>
                </article>

                <article class="gallery-card" data-category="inspo">
                    <img src="{{ asset('images/gallery/gallery-3.jpg') }}" alt="Prom outfit and design inspiration">
                    <div class="gallery-card-content">
                        <span class="gallery-tag">Inspiration</span>
                        <h3>Night Inspiration</h3>
                        <p>Style and design ideas that match the event’s energy.</p>
                    </div>
                </article>

                <article class="gallery-card" data-category="theme">
                    <img src="{{ asset('images/gallery/gallery-4.jpg') }}" alt="Casino table decorations for prom theme">
                    <div class="gallery-card-content">
                        <span class="gallery-tag">Theme</span>
                        <h3>Casino Details</h3>
                        <p>Decor details that support the Las Vegas experience.</p>
                    </div>
                </article>

                <article class="gallery-card" data-category="venue">
                    <img src="{{ asset('images/gallery/gallery-5.jpg') }}" alt="Prom ballroom lighting concept">
                    <div class="gallery-card-content">
                        <span class="gallery-tag">Venue</span>
                        <h3>Ballroom Mood</h3>
                        <p>Warm lighting and polished visuals for the big night.</p>
                    </div>
                </article>

                <article class="gallery-card" data-category="inspo">
                    <img src="{{ asset('images/gallery/gallery-6.jpg') }}" alt="Las Vegas prom moodboard">
                    <div class="gallery-card-content">
                        <span class="gallery-tag">Inspiration</span>
                        <h3>Moodboard</h3>
                        <p>A visual direction for the overall look and feel.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/gallery.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/gallery.js') }}"></script>
@endpush
