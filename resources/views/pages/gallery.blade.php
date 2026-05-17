@extends('layouts.app')

@section('title', 'Gallery | BRHS Prom 2026')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/gallery.css') }}">
@endpush

@section('content')
    <section class="gallery-hero">
        <div class="gallery-hero-overlay"></div>

        <div class="container gallery-hero-content">
            <p class="gallery-kicker">BRHS Prom 2026</p>
            <h1>Gallery</h1>
            <p class="gallery-subtitle">
                See the venue. See the vibe. See what makes
                <span>A Night in Las Vegas unforgettable.</span>
            </p>
        </div>
    </section>

    <section class="gallery-page">
        <div class="container">
            <div class="gallery-mosaic">
                <article class="gallery-item no-crop poster">
                    <img src="{{ asset('images/gallery/prom2026.png') }}" alt="Prom 2026 detail">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom11.jpg') }}" alt="Prom 11">
                </article>

{{--                <article class="gallery-item md">--}}
{{--                    <img src="{{ asset('images/gallery/overview1.png') }}" alt="Room overview">--}}
{{--                </article>--}}

{{--                <article class="gallery-item wide">--}}
{{--                    <img src="{{ asset('images/gallery/promcom9.jpg') }}" alt="Prom 9">--}}
{{--                </article>--}}

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/tickets.png') }}" alt="Prom tickets">
                </article>

                <article class="gallery-item tall">
                    <img src="{{ asset('images/gallery/promcom4.jpg') }}" alt="Prom 4">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/promcom5.jpg') }}" alt="Prom 5">
                </article>

{{--                <article class="gallery-item sm">--}}
{{--                    <img src="{{ asset('images/gallery/promcom3.jpg') }}" alt="Prom 3">--}}
{{--                </article>--}}

{{--                <article class="gallery-item wide">--}}
{{--                    <img src="{{ asset('images/gallery/promcom6.jpg') }}" alt="Prom 6">--}}
{{--                </article>--}}

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/karaoke.png') }}" alt="Karaoke area">
                </article>

                <article class="gallery-item wide-lg">
                    <img src="{{ asset('images/gallery/karaoke2.png') }}" alt="Seating and activity area">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/karaoke3.png') }}" alt="Stage and lighting area">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom7.jpg') }}" alt="Prom 7">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/karaoke4.png') }}" alt="Interior lounge view">
                </article>

                <article class="gallery-item tall-xl">
                    <img src="{{ asset('images/gallery/karaoke5.png') }}" alt="Entertainment room">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom8.jpg') }}" alt="Prom 8">
                </article>

                <article class="gallery-item no-crop poster">
                    <img src="{{ asset('images/gallery/will-you.png') }}" alt="Prom detail graphic">
                </article>

                <article class="gallery-item no-crop poster">
                    <img src="{{ asset('images/gallery/breaking-news.png') }}" alt="Prom detail announcement">
                </article>

                @php
                    $promPics = [
                        56, 4, 67, 23, 81, 78, 24, 9, 52, 13,
                        76, 2, 39, 58, 11, 73, 31, 5, 62, 27,
                        80, 14, 46, 7, 55, 18, 71, 29, 64, 10,
                        37, 79, 21, 49, 6, 69, 32, 15, 60, 3,
                        48, 75, 26, 57, 12, 82, 34, 19, 66, 28,
                        54, 8, 72, 22, 41, 16, 63, 30, 42, 25,
                        50, 17, 68, 33, 74, 20, 44, 45, 61, 35, 77,
                        40, 53, 36, 70, 43, 59, 38, 65, 47,
                        1
                    ];

                   $sizes = [
                        'vertical', 'horizontal', 'vertical', 'horizontal', 'square',
                        'horizontal', 'vertical', 'horizontal', 'vertical', 'square',
                        'horizontal', 'vertical', 'horizontal', 'vertical', 'horizontal',
                        'vertical', 'square'
                   ];
                @endphp

                @foreach($promPics as $index => $pic)
                    <article class="gallery-item {{ $sizes[$index % count($sizes)] }}">
                        <img src="{{ asset('images/gallery/prom/pic (' . $pic . ').jpg') }}" alt="Prom gallery">
                    </article>
                @endforeach

                <article class="gallery-item feature">
                    <img src="{{ asset('images/gallery/place1.jpg') }}" alt="Prom venue atmosphere">
                </article>

                <article class="gallery-item md">
                    <img src="{{ asset('images/gallery/building.png') }}" alt="Prom venue exterior">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom12.jpg') }}" alt="Prom 12 ">
                </article>

                <article class="gallery-item wide">
                    <img src="{{ asset('images/gallery/promcom13.jpg') }}" alt="Prom 13 ">
                </article>

{{--                <article class="gallery-item tall-xl">--}}
{{--                    <img src="{{ asset('images/gallery/event2.png') }}" alt="Interior event space">--}}
{{--                </article>--}}

{{--                <article class="gallery-item wide">--}}
{{--                    <img src="{{ asset('images/gallery/promcom10.jpg') }}" alt="Prom 10">--}}
{{--                </article>--}}

{{--                <article class="gallery-item wide-md">--}}
{{--                    <img src="{{ asset('images/gallery/event3.png') }}" alt="Dance floor area">--}}
{{--                </article>--}}

{{--                <article class="gallery-item wide">--}}
{{--                    <img src="{{ asset('images/gallery/promcom14.jpg') }}" alt="Prom 14">--}}
{{--                </article>--}}

{{--                <article class="gallery-item sm">--}}
{{--                    <img src="{{ asset('images/gallery/promcom1.jpg') }}" alt="Prom 1">--}}
{{--                </article>--}}

{{--                <article class="gallery-item sm">--}}
{{--                    <img src="{{ asset('images/gallery/promcom2.jpg') }}" alt="Prom 2 ">--}}
{{--                </article>--}}
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const items = document.querySelectorAll(".gallery-item");

            const oldClasses = [
                "sm", "md", "tall", "tall-xl",
                "wide", "wide-md", "wide-lg",
                "feature", "poster",
                "pano", "wide-smart", "portrait-smart", "tall-smart", "square-smart"
            ];

            items.forEach(item => {
                const img = item.querySelector("img");
                if (!img) return;

                const applySmartLayout = () => {
                    const w = img.naturalWidth;
                    const h = img.naturalHeight;
                    const ratio = w / h;

                    if (!w || !h) return;

                    item.classList.remove(...oldClasses);

                    const src = img.getAttribute("src").toLowerCase();

                    const isGraphic =
                        src.includes("poster") ||
                        src.includes("ticket") ||
                        src.includes("will-you") ||
                        src.includes("breaking-news") ||
                        src.includes("prom2026");

                    if (isGraphic || item.classList.contains("no-crop")) {
                        item.classList.add("poster", "no-crop");
                        img.style.objectPosition = "center center";
                        return;
                    }

                    if (ratio >= 2.0) {
                        item.classList.add("pano");
                        img.style.objectPosition = "center center";
                    } else if (ratio >= 1.25) {
                        item.classList.add("wide-smart");
                        img.style.objectPosition = "center 22%";
                    } else if (ratio >= 0.9) {
                        item.classList.add("square-smart");
                        img.style.objectPosition = "center 35%";
                    } else if (ratio >= 0.65) {
                        item.classList.add("portrait-smart");
                        img.style.objectPosition = "center 28%";
                    } else {
                        item.classList.add("tall-smart");
                        img.style.objectPosition = "center top";
                    }
                };

                if (img.complete) {
                    applySmartLayout();
                } else {
                    img.addEventListener("load", applySmartLayout);
                }
            });
        });
    </script>
@endpush
