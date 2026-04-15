@extends('layouts.app')

@section('title', 'BRHS | Night Guide')

@section('content')
    <section class="ng-hero">
        <div class="container ng-hero-inner">
            <p class="ng-eyebrow">BRHS PROM 2026</p>
            <h1>Night Guide</h1>
            <p class="ng-subtext">
                Everything you need to know before prom night.
            </p>
        </div>
    </section>

    <section class="ng-band pos-1" id="theme" style="--bg:url('{{ asset('images/night-guide/theme.jpg') }}');">
        <div class="ng-overlay"></div>
        <div class="container ng-band-inner">
            <span class="ng-number">01</span>
            <h2>The Theme</h2>
            <p>
                More than a dance. Inspired by Las Vegas, full of light and energy. A night that feels different in a way that is hard to explain but easy to remember.
            </p>
        </div>
    </section>

    <section class="ng-band pos-2" id="date-time" style="--bg:url('{{ asset('images/night-guide/date-time.jpg') }}');">
        <div class="ng-overlay"></div>
        <div class="container ng-band-inner">
            <span class="ng-number">02</span>
            <h2>Date &amp; Time</h2>
            <p>
                Prom will take place on May 2, 2026, from 8:00 PM to 11:00 PM.
                Arriving on time is important so you do not miss key moments.
            </p>
        </div>
    </section>

    <section class="ng-band pos-3" id="venue" style="--bg:url('{{ asset('images/night-guide/place.jpg') }}');">
        <div class="ng-overlay"></div>
        <div class="container ng-band-inner">
            <span class="ng-number">03</span>
            <h2>The Venue</h2>
            <p>
                The event will be held at The Hamilton, located at 820 Hamilton St., Unit A3,
                Charlotte, NC. More details about arrival and parking will be shared later.
            </p>
        </div>
    </section>

    <section class="ng-band pos-4" id="dress-code" style="--bg:url('{{ asset('images/night-guide/dress-code.jpg') }}');">
        <div class="ng-overlay"></div>
        <div class="container ng-band-inner">
            <span class="ng-number">04</span>
            <h2>Dress Code</h2>
            <p>
                Prom is a formal event. Students are expected to wear dresses, suits,
                or other formal outfits that match the setting and overall theme.
            </p>
        </div>
    </section>

    <section class="ng-band pos-5" id="tickets" style="--bg:url('{{ asset('images/night-guide/karaoke.jpg') }}');">
        <div class="ng-overlay"></div>
        <div class="container ng-band-inner">
            <span class="ng-number">05</span>
            <h2>Buy Early</h2>
            <p>
                Tickets must be purchased before April 15. After this date, sales will close
                and no additional tickets will be available.
            </p>

            <div class="ng-actions">
                <a href="{{ route('tickets') }}" class="ng-btn ng-btn-primary">Get Tickets</a>
                <a href="{{ route('faq') }}" class="ng-btn">View FAQ</a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/prom-info.js') }}"></script>
@endsection
