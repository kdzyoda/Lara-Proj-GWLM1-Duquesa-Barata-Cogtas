
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', "Paddler's Coffee Hauz")</title>

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    @stack('styles')
</head>
<body>

    <!-- NAVIGATION -->
    <header class="site-header">
        <nav class="navbar">
            <h2>Paddler's Coffee Hauz</h2>

            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>

    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="site-footer">
        <p>&copy; {{ date('Y') }} Paddler's Coffee Hauz.</p>
        <p>
            Laravel Group Project for IT 110 - GWLM1.
            Developed by Member 1 Khizha Duquesa,
            Member 2 Eleanore Barata, and Member 3 Demart Cogtas.
        </p>
    </footer>

    @stack('scripts')

</body>
</html>
