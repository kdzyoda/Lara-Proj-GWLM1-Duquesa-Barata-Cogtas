
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Paddler's Coffee Hauz — a campus-inspired coffee shop concept for the Caraga State University community."
    >

    <title>@yield('title', "Paddler's Coffee Hauz")</title>

    <!-- Shared Website Stylesheet -->
    <link
        rel="stylesheet"
        href="{{ asset('css/layout.css') }}"
    >

    <!-- Page-Specific Stylesheets -->
    @stack('styles')
</head>

<body>

    <!-- ========================================
         SHARED NAVIGATION
    ========================================= -->
    <header class="site-header">
        <nav class="navbar" aria-label="Main navigation">

            <!-- Website Branding -->
            <a
                href="{{ route('home') }}"
                class="navbar-brand"
                aria-label="Paddler's Coffee Hauz Home"
            >
                <img
                    src="{{ asset('images/paddlerscoffeehauz.png') }}"
                    alt="Paddler's Coffee Hauz Logo"
                    class="navbar-logo"
                    width="52"
                    height="52"
                >

                <span>Paddler's Coffee Hauz</span>
            </a>

            <!-- Navigation Links -->
            <div class="nav-links">

                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}"
                    @if(request()->routeIs('home')) aria-current="page" @endif
                >
                    Home
                </a>

                <a
                    href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}"
                    @if(request()->routeIs('about')) aria-current="page" @endif
                >
                    About Us
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                    @if(request()->routeIs('contact')) aria-current="page" @endif
                >
                    Contact
                </a>

            </div>
        </nav>
    </header>

    <!-- ========================================
         INDIVIDUAL PAGE CONTENT
    ========================================= -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- ========================================
         SHARED FOOTER
    ========================================= -->
    <footer class="site-footer">

        <p>
            &copy; {{ date('Y') }} Paddler's Coffee Hauz.
            All rights reserved.
        </p>

        <p>
            Laravel Group Project — IT 110 | GWLM1
        </p>

        <p>
            Developed by
            Khizha Duquesa (Member 1),
            Eleanore Barata (Member 2), and
            Demart Cogtas (Member 3).
        </p>

        <p>
            An independent student startup concept
            inspired by the Caraga State University community.
        </p>

    </footer>

    <!-- Page-Specific JavaScript -->
    @stack('scripts')

</body>
</html>
