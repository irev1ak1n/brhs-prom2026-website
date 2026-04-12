@extends('layouts.app')

@section('title', 'BRHS | Contact Us')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/contact.css') }}">
@endsection

@section('content')
    <section class="contact-hero">
        <div class="container contact-hero-inner">
            <p class="contact-eyebrow">BRHS PROM 2026</p>
            <h1>Contact Us</h1>
            <p class="contact-subtext">
                Have questions about prom? We’re here to help.
            </p>
        </div>
    </section>

    <section class="contact-section">
        <div class="container contact-grid">

            <!-- LEFT SIDE -->
            <div class="contact-info">
                <h2>Get in Touch</h2>

                <p>
                    If you have any questions about prom, tickets, guests, or event details,
                    feel free to reach out. We are here to help and will respond as soon as possible.
                </p>

                <div class="contact-block">
                    <h3>Email</h3>
                    <p>
                        brhsprom2026@gmail.com<br>
                        Use this for general questions, ticket issues, or guest approvals.
                    </p>
                </div>

                <div class="contact-block">
                    <h3>Response Time</h3>
                    <p>
                        Most messages are answered within 24 - 48 hours. Please be patient,
                        especially as the event date gets closer.
                    </p>
                </div>

                <div class="contact-block">
                    <h3>Need Help?</h3>
                    <p>
                        Check the FAQ page first for common questions about tickets, guests,
                        and event rules. If you still need help, contact us directly.
                    </p>
                </div>
            </div>

            @if(request()->query('sent'))
                <p style="color: #7CFFB2; margin-bottom: 1rem;">Your message was sent successfully.</p>
            @endif

            <div class="contact-form-card">
                <form class="contact-form" method="POST" action="https://formspree.io/f/xwvaeejy">

                    <label>Name</label>
                    <input type="text" name="name" required>

                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Message</label>
                    <textarea name="message" rows="5" required></textarea>

                    <button type="submit" class="contact-btn">Send Message</button>
                </form>
            </div>

        </div>
    </section>


@endsection
