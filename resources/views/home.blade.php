
@extends('layouts.app')

@section('title', "Home | Paddler's Coffee Hauz")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- HOME PAGE: HERO SECTION -->
<section class="hero">
    <div class="hero-container">

        <div class="hero-text">
            <span class="section-label">
                WELCOME TO PADDLER'S COFFEE HAUZ
            </span>

            <h1>
                Great Coffee.<br>
                Better Moments.
            </h1>

            <p>
                Experience the perfect blend of comfort,
                creativity, and coffee at Paddler's Coffee Hauz.
                A proposed student-friendly coffee shop near
                Caraga State University, designed for
                studying, socializing, and relaxing.
            </p>

            <div class="hero-buttons">
                <a href="#featured" class="btn-primary">
                    Explore Our Coffee
                </a>

                <a href="{{ route('about') }}" class="btn-secondary">
                    Our Story
                </a>
            </div>
        </div>

        <div class="hero-image">
            <img
                src="{{ asset('images/coffee-1.jpg') }}"
                alt="Paddler's Coffee Hauz signature coffee"
            >
        </div>

    </div>
</section>

<!-- HOME PAGE: INTRODUCTION -->
<section class="introduction">
    <div class="section-heading">
        <span class="section-label">OUR COFFEE EXPERIENCE</span>

        <h2>More Than Just Coffee</h2>

        <p>
            Paddler's Coffee Hauz is envisioned as a
            welcoming campus-inspired café where
            students, faculty, and coffee enthusiasts
            can enjoy quality beverages while making
            meaningful connections.
        </p>
    </div>

    <div class="features">

        <article class="feature-card">
            <h3>☕ Quality Coffee</h3>
            <p>
                Delicious coffee beverages crafted
                for every coffee lover.
            </p>
        </article>

        <article class="feature-card">
            <h3>📚 Study-Friendly Space</h3>
            <p>
                A comfortable environment where
                students can study and recharge.
            </p>
        </article>

        <article class="feature-card">
            <h3>🤝 Campus Community</h3>
            <p>
                A welcoming space for conversations,
                connections, and shared experiences.
            </p>
        </article>

    </div>
</section>

<!-- HOME PAGE: FEATURED COFFEE -->
<section class="featured" id="featured">

    <div class="section-heading">
        <span class="section-label">OUR PROPOSED FAVORITES</span>

        <h2>Featured Coffee Selection</h2>

        <p>
            Discover our proposed signature beverages,
            inspired by the everyday campus lifestyle.
        </p>
    </div>

    <div class="coffee-carousel">

        <button
            type="button"
            class="carousel-btn"
            id="prevBtn"
            aria-label="Previous coffee">
            &#10094;
        </button>

        <div class="carousel-content">

            <img
                src="{{ asset('images/coffee-1.jpg') }}"
                alt="Signature Iced Latte"
                id="carouselImage"
            >

            <h3 id="carouselTitle">
                Signature Iced Latte
            </h3>

            <p id="carouselDescription">
                Smooth espresso combined with creamy milk
                and served over ice.
            </p>

        </div>

        <button
            type="button"
            class="carousel-btn"
            id="nextBtn"
            aria-label="Next coffee">
            &#10095;
        </button>

    </div>

</section>

<!-- HOME PAGE: CALL TO ACTION -->
<section class="call-to-action">

    <h2>CSU's first very student-dedicated café. Golden Paddlers dedicated to your coffee experience.</h2>

    <p>
        Discover the vision behind Paddler's Coffee Hauz
        and connect with our growing café, level-up your coffee plus academic experience.
    </p>

    <a href="{{ route('contact') }}" class="btn-primary">
        Contact Us
    </a>

</section>

@endsection

@push('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endpush
