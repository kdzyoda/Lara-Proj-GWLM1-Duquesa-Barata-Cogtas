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
    <header>
        <nav>
            <h2>Paddler's Coffee Hauz</h2>

            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <!-- PAGE CONTENT -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer>
        <p>© {{ date('Y') }} Paddler's Coffee Hauz</p>
        <p>Group Project for IT 110 - GWLM1. Developed by Khizha Duquesa, Eleanore Barata, and Demart Cogtas</p>
    </footer>

    @stack('scripts')

</body>
</html>