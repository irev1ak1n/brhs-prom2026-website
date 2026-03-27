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
                    <span class="ticket-badge">Most Popular</span>
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

                    <div class="ticket-controls">
                        <button type="button" class="qty-btn" data-target="general" data-action="decrease">−</button>
                        <input type="number" id="general" class="qty-input" value="0" min="0" max="10" readonly>
                        <button type="button" class="qty-btn" data-target="general" data-action="increase">+</button>
                    </div>
                </article>

                <article class="ticket-card">
                    <h2>Guest Ticket</h2>
                    <p class="ticket-price">$85</p>
                    <p class="ticket-desc">
                        For approved guests attending with a BRHS student.
                    </p>

                    <ul class="ticket-features">
                        <li>Guest admission</li>
                        <li>Requires approval form</li>
                        <li>Full event access</li>
                        <li>Refreshments included</li>
                    </ul>

                    <div class="ticket-controls">
                        <button type="button" class="qty-btn" data-target="guest" data-action="decrease">−</button>
                        <input type="number" id="guest" class="qty-input" value="0" min="0" max="10" readonly>
                        <button type="button" class="qty-btn" data-target="guest" data-action="increase">+</button>
                    </div>
                </article>
            </div>

            <aside class="tickets-summary">
                <span class="summary-label">Order Summary</span>
                <h3>Your Tickets</h3>

                <div class="summary-row">
                    <span>General Admission</span>
                    <span id="general-count">0</span>
                </div>

                <div class="summary-row">
                    <span>Guest Ticket</span>
                    <span id="guest-count">0</span>
                </div>

                <div class="summary-divider"></div>

                <div class="summary-row total">
                    <span>Total</span>
                    <span id="ticket-total">$0</span>
                </div>

                <p class="summary-note">
                    Ticket sales close on April 15. Guest tickets require approval before the event.
                </p>

                <button type="button" class="summary-btn">Continue</button>
            </aside>

        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{ asset('js/tickets.js') }}"></script>
@endsection
