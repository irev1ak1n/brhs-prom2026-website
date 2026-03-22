@extends('layouts.app')

@section('title', 'Prom 2026')

@section('content')
    <main class="home-page">
        <section class="hero-page">
            <div class="hero-bg"></div>
            <div class="hero-glow hero-glow-1"></div>
            <div class="hero-glow hero-glow-2"></div>

            <header class="topbar hero-top">
                <div class="topbar-shell top-row">
                    <a href="{{ url('/') }}" class="brand brand-uw" aria-label="Go to homepage">
                        <div class="brand-text">
                            <strong>Prom: A Night in Las Vegas</strong>
                            <span>Ballantyne Ridge High School</span>
                        </div>
                    </a>

                    <nav class="nav" aria-label="Primary navigation">
                        <a href="#info">Info</a>
                        <a href="#tickets">Get Tickets</a>
                        <a href="#gallery">Gallery</a>
                        <a href="#contact">Contact Us</a>
                        <a href="#faq">FAQ</a>
                    </nav>
                </div>
            </header>

            <section class="hero container hero-minimal">
                <div class="hero-actions">
                    <a href="#" class="btn btn-primary">Buy Tickets</a>
                    <a href="#" class="btn btn-secondary">View Details</a>
                </div>
            </section>
        </section>

        <section class="signup-band">

            <div class="container signup-wrap">
                <div class="signup-copy">
                    <span class="signup-eyebrow">Stay in the Loop</span>
                    <h2>Don’t miss prom updates.</h2>
                    <p>
                        Get important reminders about tickets, event details, deadlines,
                        and announcements for BRHS Prom 2026 — all in one place.
                    </p>
                </div>

                <div class="signup-form-card">
                    <form class="signup-form" action="#" method="post">
                        <p class="required-note"><span>*</span> indicates required</p>

                        <label for="email">Email Address <span>*</span></label>
                        <input type="email" id="email" name="email" required>

                        <label for="first_name">First Name</label>
                        <input type="text" id="first_name" name="first_name">

                        <fieldset class="signup-fieldset">
                            <legend>Are you part of BRHS?</legend>

                            <label class="radio-option">
                                <input type="radio" name="brhs_role" value="student">
                                <span>Student</span>
                            </label>

                            <label class="radio-option">
                                <input type="radio" name="brhs_role" value="parent">
                                <span>Parent</span>
                            </label>

                            <label class="radio-option">
                                <input type="radio" name="brhs_role" value="other">
                                <span>Other</span>
                            </label>
                        </fieldset>

                        <button type="submit" class="signup-btn">Subscribe</button>
                    </form>
                </div>
            </div>
        </section>

        @include('components.prom-info')

    </main>
@endsection
