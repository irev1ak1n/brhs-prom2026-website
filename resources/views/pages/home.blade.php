@extends('layouts.app')

@section('title', 'Prom 2026')

@section('content')
    <main class="hero-page">
        <div class="hero-bg"></div>
        <div class="hero-glow hero-glow-1"></div>
        <div class="hero-glow hero-glow-2"></div>

        <header class="topbar">
            <div class="brand">PROM 2026</div>

            <nav class="nav">
                <a href="#">Home</a>
                <a href="#">Tickets</a>
                <a href="#">Gallery</a>
                <a href="#">FAQ</a>
            </nav>
        </header>

        <section class="hero container">
            <div class="hero-copy">
                <span class="eyebrow">May 2 • Las Vegas Night</span>

                <h1>One night.<br>Bright lights.<br>Vegas energy.</h1>

                <p class="hero-text">
                    Welcome to BRHS Prom 2026.
                    Prom isn’t just another night — it’s the one you remember.
                    The lights, the music, the people you won’t forget.
                    This is your night. Make it count.
                </p>

                <p class="venue-line">
                    The Hamilton • 820 Hamilton St. Unit A3, Charlotte, NC
                </p>

                <div class="hero-actions">
                    <a href="#" class="btn btn-primary">Buy Tickets</a>
                    <a href="#" class="btn btn-secondary">View Details</a>
                </div>

                <div class="hero-meta">
                    <div class="meta-card">
                        <span class="meta-label">Date</span>
                        <strong>May 2, 2026</strong>
                    </div>

                    <div class="meta-card">
                        <span class="meta-label">Location</span>
                        <strong>The Hamilton</strong>
                    </div>

                    <div class="meta-card">
                        <span class="meta-label">Theme</span>
                        <strong>Las Vegas</strong>
                    </div>
                </div>
            </div>

            <div class="hero-panel">
                <div class="glass-card">
                    <span class="card-label">Prom Countdown</span>

                    <div class="count-grid">
                        <div class="count-box">
                            <span class="count-number" id="days">00</span>
                            <span class="count-name">Days</span>
                        </div>

                        <div class="count-box">
                            <span class="count-number" id="hours">00</span>
                            <span class="count-name">Hours</span>
                        </div>

                        <div class="count-box">
                            <span class="count-number" id="minutes">00</span>
                            <span class="count-name">Minutes</span>
                        </div>

                        <div class="count-box">
                            <span class="count-number" id="seconds">00</span>
                            <span class="count-name">Seconds</span>
                        </div>
                    </div>

                    <div class="ticket-note">
                        <span class="ticket-note-title">Tickets are now open</span>
                        <p>
                            General admission tickets are available now. Lock in your spot,
                            plan your look, and get ready for an unforgettable prom night.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
