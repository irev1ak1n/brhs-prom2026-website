@extends('layouts.app')

@section('title', 'BRHS | Tickets')

@section('content')
    <section class="tickets-hero">
        <div class="container tickets-hero-inner">
            <p class="tickets-eyebrow">BRHS PROM 2026</p>
            <h1>Get Tickets</h1>
            <p class="tickets-subtext">
                Reserve your place for a night of lights, music, and memories.
            </p>
        </div>
    </section>

    <section class="tickets-section">
        <div class="container tickets-layout">

            <div class="tickets-grid">
                <article class="ticket-card featured">
                    <span class="ticket-badge">Now Available</span>
                    <h2>General Admission</h2>
                    <p class="ticket-price">$75</p>
                    <p class="ticket-desc">
                        Entry to BRHS Prom 2026 with access to the full event experience.
                    </p>

                    <ul class="ticket-features">
                        <li>Prom entry</li>
                        <li>Access to music and dance floor</li>
                        <li>Photo areas</li>
                        <li>Refreshments included</li>
                    </ul>

                    <div class="ticket-note">
                        Tickets are purchased through the official school payment system.
                    </div>
                </article>

                <article class="ticket-card ticket-card-closed">
                    <span class="ticket-badge ticket-badge-closed">Closed</span>
                    <h2>Early Bird Special</h2>
                    <p class="ticket-price">
                        <span class="old-price">$65</span>
                    </p>
                    <p class="ticket-desc">
                        Early bird tickets were available for $65 through Valentine’s Day.
                    </p>

                    <ul class="ticket-features">
                        <li>Special launch price</li>
                        <li>Available before Valentine’s Day</li>
                        <li>Sales window has ended</li>
                        <li>General Admission is now $75</li>
                    </ul>

                    <div class="ticket-closed-box">
                        This offer is no longer available.
                    </div>
                </article>
            </div>

            <aside class="tickets-summary">
                <span class="summary-label">Order Summary</span>
                <h3>Your Tickets</h3>

                <div class="summary-row">
                    <span>General Admission</span>
                    <span>—</span>
                </div>

                <div class="summary-row">
                    <span>Early Bird Special</span>
                    <span>Closed</span>
                </div>

                <div class="summary-divider"></div>

                <div class="summary-row total">
                    <span>Total</span>
                    <span id="ticket-total">$0</span>
                </div>

                <p class="summary-note">
                    Early bird pricing ended after Valentine’s Day. General admission tickets are now $75.
                </p>

                <a href="https://osp.osmsinc.com/CMS/BVModules/ProductTemplates/Bvc2013/Product.aspx?productid=AZ536-189"
                   target="_blank"
                   class="summary-btn">
                    Go to Payment
                </a>
            </aside>

        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/tickets.js') }}"></script>
@endsection
