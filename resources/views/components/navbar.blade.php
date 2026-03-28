<header class="topbar hero-top">
    <div class="topbar-shell top-row">
        <a href="{{ url('/') }}" class="brand brand-uw" aria-label="Go to homepage">
            <div class="brand-text">
                <strong>Prom: A Night in Las Vegas</strong>
                <span>Ballantyne Ridge High School</span>
            </div>
        </a>

        <nav class="nav" aria-label="Primary navigation">
            <a href="{{ route('night-guide') }}">Night Guide</a>
            <a href="{{ route('tickets') }}">Get Tickets</a>
            <a href="{{ url('/#gallery') }}">Gallery</a>
            <a href="{{ route('contact') }}">Contact Us</a>
            <a href="{{ route('faq') }}">FAQ</a>
        </nav>

        <div class="nav-search" role="search" aria-label="Search prom info">
            <input
                id="navSearchInput"
                type="search"
                placeholder="Search prom info..."
                aria-label="Search prom info"
            />
            <button id="navSearchBtn" type="button" aria-label="Search">
                <svg class="nav-search-icon" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                        d="M10.5 18a7.5 7.5 0 1 1 5.3-12.8A7.5 7.5 0 0 1 10.5 18Z"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    />
                    <path
                        d="M16.3 16.3 21 21"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                    />
                </svg>
            </button>
        </div>
    </div>
</header>
