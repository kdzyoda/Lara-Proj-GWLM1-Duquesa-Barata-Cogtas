@extends('layouts.app')

@section('title', 'Contact Us')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Nunito:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<div class="contact-page">

    <section class="contact-hero">
        <div class="contact-hero-text">
            <p class="contact-eyebrow">We'd love to hear from you</p>
            <h1>Let's brew a conversation.</h1>
            <p class="contact-lead">
                Questions, feedback, or a table for the weekend. Send us a message and we'll get back to you soon.
            </p>
        </div>

        <div class="contact-card">
            <h2>Send us a message</h2>

            <div id="successMessage" class="success-message" role="status" hidden>
                Thank you! Your message has been sent successfully.
            </div>

            <form id="contactForm" novalidate>
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your full name">
                        <small class="error-message" id="nameError"></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="you@example.com">
                        <small class="error-message" id="emailError"></small>
                    </div>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="What is this about?">
                    <small class="error-message" id="subjectError"></small>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here"></textarea>
                    <small class="error-message" id="messageError"></small>
                </div>

                <button type="submit" class="btn-submit">Send message</button>
            </form>
        </div>
    </section>

    <section class="contact-details">
        <div class="contact-detail">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11a7 7 0 1 1 14 0c0 4.8-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
            <h3>Address</h3>
            <p>Caraga State University</p>
        </div>
        <div class="contact-detail">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/></svg>
            <h3>Phone</h3>
            <p>+63 912 345 6789</p>
        </div>
        <div class="contact-detail">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
            <h3>Email</h3>
            <p>eleanorebarata@gmail.com</p>
        </div>
        <div class="contact-detail">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
            <h3>Opening hours</h3>
            <p>Daily, 7:00 AM to 5:00 PM</p>
        </div>
    </section>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush
