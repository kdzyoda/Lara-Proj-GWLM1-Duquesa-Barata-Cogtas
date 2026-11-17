
@extends('layouts.app')

@section('title', "Home | Paddler's Coffee Hauz")

{{-- Home Page Stylesheet --}}
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

    <!-- ========================================
         SECTION 1: HERO / WELCOME
    ========================================= -->
    <section class="hero" id="home">
        <div class="hero-container">

            <!-- LEFT SIDE: BIG LOGO -->
            <div class="hero-logo">
                <img
                    src="{{ asset('images/paddlerscoffeehauz.png') }}"
                    alt="Paddler's Coffee Hauz Logo"
                    loading="eager"
                >
            </div>

            <!-- CENTER: HERO TEXT -->
            <div class="hero-text">
                <span class="section-label">
                    WELCOME TO PADDLER'S COFFEE HAUZ
                </span>

                <h1 class="hero-title">
                    <span>Great Coffee.</span>
                    <span>Better Moments.</span>
                </h1>

                <p>
                    Experience the perfect blend of comfort,
                    creativity, and quality coffee at
                    Paddler's Coffee Hauz. A proposed student-friendly
                café near Caraga State University, designed for
                    studying, socializing, and relaxing between classes.
                </p>

                <div class="hero-buttons">
                    <a href="#featured" class="btn-primary">
                        Explore Our Coffee
                    </a>

                    <a href="{{ route('about') }}" class="btn-secondary">
                        Discover Our Story
                    </a>
                </div>
            </div>

            <!-- RIGHT SIDE: HERO IMAGE -->
            <div class="hero-image">
                <img
                    src="{{ asset('images/ICEDLATTE.png') }}"
                    alt="Signature Iced Latte at Paddler's Coffee Hauz"
                    loading="eager"
                >
            </div>

        </div>
    </section>

    <!-- ========================================
         SECTION 2: CAFÉ INTRODUCTION
    ========================================= -->
    <section class="introduction" id="introduction">

        <div class="section-heading">
            <span class="section-label">
                OUR COFFEE EXPERIENCE
            </span>

            <h2>More Than Just Coffee</h2>

            <p>
                Paddler's Coffee Hauz is envisioned as
                a welcoming campus-inspired café where
                students, faculty, and coffee enthusiasts
                can enjoy quality beverages, recharge
                between academic activities, and build
                meaningful connections.
            </p>
        </div>

        <div class="features">

            <article class="feature-card">
                <h3>
                    <span aria-hidden="true">☕</span>
                    Quality Coffee
                </h3>

                <p>
                    Delicious coffee beverages carefully
                    prepared to complement every student's
                    busy schedule.
                </p>
            </article>

            <article class="feature-card">
                <h3>
                    <span aria-hidden="true">📚</span>
                    Study-Friendly Space
                </h3>

                <p>
                    A comfortable and welcoming environment
                    envisioned for studying, collaborating,
                    and taking well-deserved breaks.
                </p>
            </article>

            <article class="feature-card">
                <h3>
                    <span aria-hidden="true">🤝</span>
                    Campus Community
                </h3>

                <p>
                    A place that brings Golden Paddlers
                    together through great conversations,
                    shared experiences, and good coffee.
                </p>
            </article>

        </div>
    </section>

    <!-- ========================================
         SECTION 3: FEATURED COFFEE CAROUSEL
    ========================================= -->
    <section class="featured" id="featured">

        <div class="section-heading">
            <span class="section-label">
                OUR PROPOSED FAVORITES
            </span>

            <h2>Featured Coffee Selection</h2>

            <p>
                Explore our proposed signature beverages,
                inspired by the everyday campus lifestyle
                and the coffee preferences of our community.
            </p>
        </div>

        <div class="coffee-carousel"
             role="region"
             aria-label="Featured coffee selection">

            <!-- Previous Slide -->
            <button
                type="button"
                class="carousel-btn"
                id="prevBtn"
                aria-label="Previous coffee">
                &#10094;
            </button>

            <!-- Coffee Display -->
            <div class="carousel-content">

                <img
                    src="{{ asset('images/ICEDLATTE.png') }}"
                    alt="Signature Iced Latte"
                    id="carouselImage"
                    loading="lazy"
                >

                <h3 id="carouselTitle">
                    Signature Iced Latte
                </h3>

                <p id="carouselDescription"
                   aria-live="polite">
                    Smooth espresso combined with
                    creamy milk and served over ice.
                    CSUans students top-tier coffee, a best seller indeed!
                </p>

            </div>

            <!-- Next Slide -->
            <button
                type="button"
                class="carousel-btn"
                id="nextBtn"
                aria-label="Next coffee">
                &#10095;
            </button>

        </div>
    </section>

    <!-- ========================================
         SECTION 4: CALL TO ACTION
    ========================================= -->
    <section class="call-to-action" id="connect">

        <h2>
            A Coffee Experience Dedicated
            to Golden Paddlers.
        </h2>

        <p>
            Paddler's Coffee Hauz is envisioned as a
            student-centered café inspired by the
            Caraga State University community.

            Discover our vision of combining quality
            coffee, meaningful connections, and
            a better academic lifestyle.
        </p>

        <a href="{{ route('contact') }}"
           class="btn-primary">
            Connect With Us
        </a>

    </section>

@endsection

{{-- Home Page JavaScript --}}
@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
