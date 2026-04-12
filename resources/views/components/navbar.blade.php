<header class="topbar hero-top">
    <div class="topbar-shell top-row">
        <a href="{{ url('/') }}" class="brand brand-uw" aria-label="Go to homepage">
            <div class="brand-text">
                <strong>Prom: A Night in Las Vegas</strong>
                <span>Ballantyne Ridge High School</span>
            </div>
        </a>

        <nav class="nav desktop-nav" aria-label="Primary navigation">
            <a href="{{ route('night-guide') }}">Night Guide</a>
            <a href="{{ route('tickets') }}">Get Tickets</a>
            <a href="{{ route('gallery') }}">Gallery</a>
            <a href="{{ route('contact') }}">Contact Us</a>
            <a href="{{ route('faq') }}">FAQ</a>
        </nav>

        <div class="topbar-actions">
            <!-- Search -->
            <div class="nav-search-wrap" id="navSearchWrap">
                <button id="searchToggle" class="icon-btn search-toggle" type="button" aria-label="Open search" aria-expanded="false">
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

                <div class="nav-search" id="navSearchBox" role="search" aria-label="Search prom info">
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

            <!-- Hamburger -->
            <button class="icon-btn menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile menu overlay -->
<div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

<!-- Mobile sidebar -->
<aside class="mobile-sidebar" id="mobileSidebar" aria-label="Mobile navigation">
    <div class="mobile-sidebar-head">
        <div class="mobile-brand">
            <strong>BRHS Prom 2026</strong>
            <span>A Night in Las Vegas</span>
        </div>

        <button class="icon-btn close-menu" id="closeMenu" type="button" aria-label="Close menu">
            ×
        </button>
    </div>

    <div class="mobile-search" role="search" aria-label="Search prom info mobile">
        <input
            id="mobileNavSearchInput"
            type="search"
            placeholder="Search prom info..."
            aria-label="Search prom info mobile"
        />
        <button id="mobileNavSearchBtn" type="button" aria-label="Search">
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

    <nav class="mobile-nav-links" aria-label="Mobile primary navigation">
        <a href="{{ route('night-guide') }}">Night Guide</a>
        <a href="{{ route('tickets') }}">Get Tickets</a>
        <a href="{{ route('gallery') }}">Gallery</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="{{ route('faq') }}">FAQ</a>
    </nav>
</aside>
