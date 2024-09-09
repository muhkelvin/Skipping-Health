<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel Skipping App') }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">
<!-- Navbar -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Brand -->
        <a class="text-2xl font-extrabold text-blue-600 tracking-wide" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel Skipping App') }}
        </a>

        <!-- Hamburger Button for mobile -->
        <button class="md:hidden flex items-center px-3 py-2 border rounded text-blue-600 border-gray-300 hover:bg-blue-100 transition duration-200" id="navbar-toggler">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>

        <!-- Navbar Items -->
        <div class="hidden md:flex md:items-center space-x-8" id="navbarNav">
            <ul class="flex space-x-6 font-medium">
                @guest
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('login') }}">Login</a></li>
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('profile.show') }}">Profile</a></li>
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('skipping.index') }}">Skipping Records</a></li>
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('health-impacts.index') }}">Health Impacts</a></li>
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('goals.index') }}">Fitness Goals</a></li>
                    <li><a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('achievements.index') }}">Achievements</a></li>
                    <li>
                        <a class="text-gray-600 hover:text-blue-600 transition duration-200" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="py-10">
    <div class="container mx-auto px-4">
        @yield('content')
    </div>
</main>

<!-- Footer -->

<!-- Script for Mobile Navbar Toggle -->
<script>
    document.getElementById('navbar-toggler').addEventListener('click', function() {
        const navbarNav = document.getElementById('navbarNav');
        navbarNav.classList.toggle('hidden');
    });
</script>
</body>
</html>
