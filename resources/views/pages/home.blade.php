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

        <section class="instagram-feed-section">
            <div class="instagram-collage-bg" aria-hidden="true">
                <span class="collage-tile t1"></span>
                <span class="collage-tile t2"></span>
                <span class="collage-tile t3"></span>
                <span class="collage-tile t4"></span>
                <span class="collage-tile t5"></span>
                <span class="collage-tile t6"></span>
                <span class="collage-tile t7"></span>
                <span class="collage-tile t8"></span>
                <span class="collage-tile t9"></span>
                <span class="collage-tile t10"></span>
                <span class="collage-tile t11"></span>
                <span class="collage-tile t12"></span>
                <span class="collage-tile t13"></span>
                <span class="collage-tile t14"></span>
                <span class="collage-tile t15"></span>
                <span class="collage-tile t16"></span>
                <span class="collage-tile t17"></span>
                <span class="collage-tile t18"></span>
                <span class="collage-tile t19"></span>
                <span class="collage-tile t20"></span>

            </div>

            <div class="instagram-collage-overlay"></div>
            <div class="instagram-collage-vignette"></div>
            <div class="instagram-collage-glow"></div>

            <div class="container instagram-feed-shell">
                <div class="instagram-feed-head">
                    <p class="instagram-kicker">FOLLOW THE NIGHT</p>
                    <h1 class="hero-title">
                        <span>LATEST FROM INSTAGRAM</span>
                    </h1>
                    <p class="instagram-subtext">
                        See the latest prom announcements, ticket reminders, and event updates.
                    </p>
                </div>

                <div class="instagram-feed-grid">
                    <div class="instagram-post-card">
                        <blockquote class="instagram-media"
                                    data-instgrm-captioned
                                    data-instgrm-permalink="https://www.instagram.com/reel/DWU68tFjDU9/?utm_source=ig_embed"
                                    data-instgrm-version="14">
                        </blockquote>
                    </div>

                    <div class="instagram-post-card">
                        <blockquote class="instagram-media"
                                    data-instgrm-captioned
                                    data-instgrm-permalink="https://www.instagram.com/p/DVmD46AEayp/"
                                    data-instgrm-version="14">
                        </blockquote>
                    </div>

                    <div class="instagram-post-card">
                        <blockquote class="instagram-media"
                                    data-instgrm-captioned
                                    data-instgrm-permalink="https://www.instagram.com/reel/DWrkETVEfvk/"
                                    data-instgrm-version="14">
                        </blockquote>
                    </div>
                </div>

                <div class="instagram-feed-cta">
                    <a href="https://www.instagram.com/brhsprom26/" target="_blank" rel="noopener" class="instagram-feed-btn">
                        View More on Instagram
                    </a>
                </div>
            </div>
        </section>




        <section class="tickets-strip">
            <div class="tickets-strip-inner">
                <p class="tickets-strip-text">More than 100 tickets sold</p>
                <a href="https://osp.osmsinc.com/CMS/BVModules/ProductTemplates/Bvc2013/Product.aspx?productid=AZ536-189"
                   class="tickets-strip-btn" target="_blank"
                   onclick="gtag('event', 'buy_tickets_click', {
                     event_category: 'engagement',
                     event_label: 'go to payment',
                     transport_type: 'beacon'
                   })">Buy Your Tickets</a>
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
            <div class="venue-wave venue-wave-top"></div>

            <div class="venue-inner">
                <img src="{{ asset('images/bhrs-logo.jpg') }}" alt="BRHS Logo" class="venue-logo">

                <a href="mailto:brhsprom2026@gmail.com" class="venue-social">
                    <i class="fa-regular fa-envelope"></i>
                </a>

                <a href="https://instagram.com/brhsprom26" target="_blank" class="venue-social">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <p class="venue-text">
                    BRHS Prom 2026 • A Night in Las Vegas
                </p>

                <p class="venue-text">
                    Join us for an unforgettable night filled with music, lights, and great energy.
                    Celebrate with friends, make memories, and enjoy every moment of BRHS Prom 2026 together.
                </p>
            </div>

            <div class="venue-wave venue-wave-bottom"></div>
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
