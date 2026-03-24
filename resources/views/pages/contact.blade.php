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
                    Whether it’s tickets, guests, or event details — reach out and we’ll get back to you.
                </p>

                <div class="contact-block">
                    <h3>Email</h3>
                    <p>brhsprom2026@gmail.com</p>
                </div>

                <div class="contact-block">
                    <h3>Location</h3>
                    <p>The Hamilton<br>Charlotte, NC</p>
                </div>

                <div class="contact-block">
                    <h3>Response Time</h3>
                    <p>We usually respond within 24–48 hours.</p>
                </div>
            </div>

            <!-- RIGHT SIDE FORM -->
            <div class="contact-form-card">
                <form class="contact-form" method="POST" action="#">
                    @csrf

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
