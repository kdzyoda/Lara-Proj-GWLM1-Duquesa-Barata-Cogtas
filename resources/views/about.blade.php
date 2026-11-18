@extends('layouts.app')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
@php
    // Team data: edit names, roles, and bios here
    $team = [
        ['name' => 'Khizha Duquesa', 'role' => 'Founder and Head Barista', 'bio' => 'Sets the menu and tastes every new roast first.'],
        ['name' => 'Eleanore Barata', 'role' => 'Store Manager', 'bio' => 'Keeps the cafe running smoothly from open to close.'],
        ['name' => 'Demart Cogtas', 'role' => 'Pastry and Kitchen Lead', 'bio' => 'Bakes the pairings that go with every cup.'],
    ];
@endphp

<div class="about">

    {{-- PAGE HEADING --}}
    <section class="about-hero">
        <div class="about-wrap">
            <h1 class="about-title">About Paddler's Coffee Hauz</h1>
            <p class="about-description about-hero__lead">
                Paddler's Coffee Hauz is a student-friendly cafe for the Caraga State University
                community, built around study breaks, good coffee, and a table that always has
                room for one more.
            </p>
        </div>
    </section>

    {{-- OUR STORY (Read More / Read Less) --}}
    <section class="about-story">
        <div class="about-wrap about-story__grid">
            <h2 class="about-title">Our story</h2>

            <div class="about-story__body">
                <p class="about-description">
                    Paddler's Coffee Hauz started with a simple idea: a good cup of coffee should feel
                    like a pause, not a pit stop. We want to give students, teachers, and staff a warm
                    place to study, talk, and unwind between classes.
                </p>

                <div class="about-story__more" id="storyMore">
                    <div class="about-story__more-inner">
                        <p class="about-description">
                            Our menu stays focused on espresso-based classics and cold brews, so each
                            item gets full attention.
                        </p>
                        <p class="about-description">
                            Our goal is simple: a place people come to for the coffee and stay for
                            the company.
                        </p>
                    </div>
                </div>

                <button type="button" class="about-btn" id="readMoreBtn" aria-expanded="false" aria-controls="storyMore">
                    Read more
                </button>
            </div>
        </div>
    </section>

    {{-- MISSION AND VISION --}}
    <section class="about-mv">
        <div class="about-wrap about-mv__grid">
            <article class="about-mv__card about-mv__card--mission">
                <h2 class="about-title">Our mission</h2>
                <p class="about-description">
                    To serve honest, well-made coffee in a welcoming space where every student,
                    teacher, and staff member feels at home.
                </p>
            </article>

            <article class="about-mv__card about-mv__card--vision">
                <h2 class="about-title">Our vision</h2>
                <p class="about-description">
                    To become the school community's favorite gathering place, known for quality
                    coffee, friendly service, and a space made for studying and connecting.
                </p>
            </article>
        </div>
    </section>

    {{-- TEAM --}}
    <section class="about-team">
        <div class="about-wrap">
            <h2 class="about-title">Meet the team</h2>
            <p class="about-description about-team__intro">The people behind the counter and behind this website.</p>

            <div class="about-team__grid">
                @foreach ($team as $member)
                    <article class="about-member">
                        <div class="about-member__photo">
                            <svg viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="3"
                                 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 26h34v12a14 14 0 0 1-14 14h-6a14 14 0 0 1-14-14z"/>
                                <path d="M46 30h4a6 6 0 0 1 0 12h-4"/>
                                <path d="M22 8c-3 3 3 5 0 9M32 8c-3 3 3 5 0 9M42 8c-3 3 3 5 0 9"/>
                            </svg>
                        </div>
                        <h3 class="about-title">{{ $member['name'] }}</h3>
                        <p class="about-member__role">{{ $member['role'] }}</p>
                        <p class="about-description">{{ $member['bio'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}"></script>
@endpush
