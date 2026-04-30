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
                        Assistant Principle: rachaeln.smith@cms.k12.nc.us<br>
                        Use either of these for general questions, ticket issues, or guest approvals.
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

            <div class="contact-form-card">
                <form class="contact-form" id="contactForm" action="https://formspree.io/f/xwvaeejy" method="POST">

                    <label>Name</label>
                    <input type="text" name="name" required>

                    <label>Email</label>
                    <input type="email" name="email" required>

                    <label>Message</label>
                    <textarea name="message" rows="5" required></textarea>

                    <button type="submit" class="contact-btn">Send Message</button>

                    <p id="formStatus" class="form-status"></p>
                </form>

                <div class="contact-success-overlay" id="successOverlay" aria-hidden="true">
                    <div class="success-inner">
                        <h3>MESSAGE SENT</h3>

                        <div class="success-icon">
                            <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="18" width="44" height="28" stroke="currentColor" stroke-width="4"/>
                                <path d="M12 20L32 35L52 20" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>

                        <p>Thanks for reaching out. We’ll get back to you soon.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('contactForm');
            const status = document.getElementById('formStatus');
            const overlay = document.getElementById('successOverlay');
            const card = document.querySelector('.contact-form-card');

            if (!form) return;

            form.addEventListener('submit', async function (e) {
                e.preventDefault();

                const data = new FormData(form);

                if (status) status.textContent = 'Sending...';

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: data,
                        headers: {
                            'Accept': 'application/json'
                        }
                    });

                    if (response.ok) {
                        if (status) status.textContent = '';
                        form.reset();

                        if (card && overlay) {
                            card.classList.add('is-success');
                            overlay.classList.add('show');

                            setTimeout(() => {
                                overlay.classList.remove('show');
                                card.classList.remove('is-success');
                            }, 2600);
                        }
                    } else {
                        if (status) status.textContent = 'Something went wrong. Please try again.';
                    }
                } catch (error) {
                    if (status) status.textContent = 'Something went wrong. Please try again.';
                }
            });
        });
    </script>
@endsection
