@extends('layouts.app')

@section('title', 'BRHS | PROM 2026 • Vegas Time')

@section('content')
    <main class="home-page">
        <section class="hero-page" id="home">
            <div class="hero-bg"></div>
            <div class="hero-glow hero-glow-1"></div>
            <div class="hero-glow hero-glow-2"></div>

            <section class="hero container hero-minimal">

                <div class="hero-content">
                    <h1 class="hero-title">
                        <span>WELCOME TO THE NIGHT OF LIGHTS</span>
                        <span>WHERE MEMORIES ARE MADE</span>
                        <span>BRHS PROM '26 - LAS VEGAS</span>
                    </h1>

                    <p style="opacity:0; height:0; overflow:hidden;">
                        Ballantyne Ridge High School Prom 2026 (BRHS Prom 2026) is the official prom event
                        in Charlotte, NC. Find tickets, event details, location, dress code, and updates here.
                    </p>

                    <div class="hero-actions">
                        <a href="{{ route('tickets') }}" class="hero-btn outline">GET TICKETS</a>
                        <a href="{{ route('night-guide') }}" class="hero-btn outline">PLAN YOUR NIGHT</a>
                        <a href="{{ route('contact') }}" class="hero-btn outline">CONTACT</a>
                    </div>
                </div>

            </section>
        </section>

{{--        <section class="spirit-week-section">--}}
{{--            <div class="spirit-week-bg"></div>--}}
{{--            <div class="spirit-week-overlay"></div>--}}
{{--            <div class="spirit-week-lights spirit-light-1"></div>--}}
{{--            <div class="spirit-week-lights spirit-light-2"></div>--}}

{{--            <div class="spirit-week-events spirit-week-stack">--}}
{{--                <article class="spirit-day-card card-one">--}}
{{--                    <span class="spirit-day-date">APRIL 20</span>--}}
{{--                    <h3 class="spirit-day-title">Tourist Takeover</h3>--}}
{{--                    <p class="spirit-day-text">--}}
{{--                        Hawaiian shirts, graphic tees, jerseys, sunglasses, fanny packs, cameras, and travel-style looks.--}}
{{--                    </p>--}}
{{--                </article>--}}

{{--                <article class="spirit-day-card card-two">--}}
{{--                    <span class="spirit-day-date">APRIL 21</span>--}}
{{--                    <h3 class="spirit-day-title">Lucky Looks Day</h3>--}}
{{--                    <p class="spirit-day-text">--}}
{{--                        Wear red, black, or green with lucky numbers, polka dots, stripes, bold patterns, or casino-inspired vibes.--}}
{{--                    </p>--}}
{{--                </article>--}}

{{--                <article class="spirit-day-card card-three">--}}
{{--                    <span class="spirit-day-date">APRIL 22</span>--}}
{{--                    <h3 class="spirit-day-title">Vegas Icons Day</h3>--}}
{{--                    <p class="spirit-day-text">--}}
{{--                        Dress like a famous performer, singer, magician, Elvis-style icon, or any classic Vegas entertainer.--}}
{{--                    </p>--}}
{{--                </article>--}}

{{--                <article class="spirit-day-card card-four">--}}
{{--                    <span class="spirit-day-date">APRIL 23</span>--}}
{{--                    <h3 class="spirit-day-title">High Rollers Day</h3>--}}
{{--                    <p class="spirit-day-text">--}}
{{--                        Suits, ties, dresses, blazers, jewelry, and polished red carpet inspired outfits.--}}
{{--                    </p>--}}
{{--                </article>--}}

{{--                <article class="spirit-day-card card-five">--}}
{{--                    <span class="spirit-day-date">APRIL 24</span>--}}
{{--                    <h3 class="spirit-day-title">Lights on the Vegas Strip</h3>--}}
{{--                    <p class="spirit-day-text">--}}
{{--                        Wear school colors with sparkle, glitter, sequins, or neon accents.--}}
{{--                    </p>--}}
{{--                </article>--}}
{{--            </div>--}}
{{--        </section>--}}


        <section class="tickets-strip">
            <div class="tickets-strip-inner">
                <p class="tickets-strip-text">More than 100 tickets sold</p>
                <a href="{{ route('tickets') }}" class="tickets-strip-btn">Buy Your Tickets</a>
            </div>
        </section>

        <section class="signup-band" id="newsletter">

            <div class="container signup-wrap">
                <div class="signup-copy">
                    <span class="signup-eyebrow">Stay in the Loop</span>
                    <h2>Don’t miss prom updates</h2>
                    <p>
                        Get important reminders about tickets, event details, deadlines,
                        and announcements for BRHS Prom 2026 — all in one place.
                    </p>
                </div>

                <div class="signup-form-card">
                    <form class="signup-form" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf

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

                        @if(session('newsletter_success'))
                            <p style="margin-top:12px; color:#7CFFB2;">{{ session('newsletter_success') }}</p>
                        @endif

                        @if(session('newsletter_error'))
                            <p style="margin-top:12px; color:#ff8f8f;">{{ session('newsletter_error') }}</p>
                        @endif
                    </form>
                </div>
            </div>
        </section>

        @include('components.prom-info')

        <section class="venue-showcase">
            <div class="venue-inner">
                <img src="{{ asset('images/bhrs-logo.jpg') }}" alt="BRHS Logo" class="venue-logo">

                <div class="venue-socials">
                    <i class="fa-regular fa-envelope"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-snapchat"></i>
                </div>

                <p class="venue-text">
                    BRHS Prom 2026 • A Night in Las Vegas
                </p>
                <p class="venue-text">
                    Join us for an unforgettable night filled with music, lights, and great energy.
                    Celebrate with friends, make memories, and enjoy every moment of BRHS Prom 2026 together.
                </p>
            </div>
        </section>

    </main>
@endsection


@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const section = document.querySelector(".spirit-week-section");
            const cards = document.querySelectorAll(".spirit-float-card");

            if (!section || !cards.length) return;

            let hasAnimated = false;

            window.addEventListener("scroll", () => {
                if (hasAnimated) return;

                const rect = section.getBoundingClientRect();

                const inView = rect.top < window.innerHeight * 0.8 && rect.bottom > 0;

                if (inView) {
                    hasAnimated = true;

                    cards.forEach((card, index) => {
                        setTimeout(() => {
                            card.classList.add("animate-in");
                        }, index * 120);
                    });
                }
            });
        });
    </script>
@endpush
