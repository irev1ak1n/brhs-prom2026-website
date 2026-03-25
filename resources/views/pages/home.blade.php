@extends('layouts.app')

@section('title', 'BRHS | PROM 2026 • Vegas Time')

@section('content')
    <main class="home-page">
        <section class="hero-page">
            <div class="hero-bg"></div>
            <div class="hero-glow hero-glow-1"></div>
            <div class="hero-glow hero-glow-2"></div>

            @include('components.navbar')

            <section class="hero container hero-minimal">

                <div class="hero-content">
                    <h1 class="hero-title">
                        <span>WELCOME TO THE NIGHT OF LIGHTS</span>
                        <span>WHERE MEMORIES ARE MADE</span>
                        <span>BRHS PROM '26 - LAS VEGAS</span>
                    </h1>

                    <div class="hero-actions">
                        <a href="#tickets" class="hero-btn outline">GET TICKETS</a>
                        <a href="#gallery" class="hero-btn outline">PLAN YOUR NIGHT</a>
                        <a href="{{ route('contact') }}" class="hero-btn outline">CONTACT</a>
                    </div>
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

        @include('components.navbar')
    </main>
@endsection
