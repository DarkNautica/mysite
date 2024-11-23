<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RobbinsBuilds - Welcome</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Font Awesome for Icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 dark:text-white transition-all duration-300">

    <!-- Header Section -->
    <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex items-center justify-between shadow-md transition-all duration-300">
        <div class="flex items-center">
            <!-- Increased logo size -->
            <img src="{{ asset('images/logo.svg') }}" alt="RobbinsBuilds Logo" class="h-32 w-auto hover:scale-105 transform transition-all duration-300">
        </div>
        <nav class="flex space-x-6 items-center">
            <a href="/" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Home</a>
            <a href="/about" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">About</a>
            <a href="/services" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Services</a>
            <a href="/contact" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Contact</a>

            <!-- Dashboard Button Styled as a Header Link -->
            @auth
                <a href="/dashboard" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Dashboard</a>
            @endauth

            <!-- Profile Dropdown -->
            @auth
                <div class="relative group" id="profile-dropdown">
                    <!-- Profile Button -->
                    <button class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300 flex items-center">
                        <span class="mr-2">{{ Auth::user()->name }}</span>
                        <i class="fas fa-user-circle text-2xl"></i>
                    </button>
                    
                    <!-- Dropdown Menu (Adjusted Margin) -->
                    <div class="absolute right-0 mt-1 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-lg py-2 opacity-0 group-hover:opacity-100 focus-within:opacity-100 pointer-events-none group-hover:pointer-events-auto focus-within:pointer-events-auto transition-all duration-300 z-10">
                        <a href="/profile" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300">Profile</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-300"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                        <!-- Logout Form -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @else
                <!-- Login and Register Links -->
                <a href="{{ route('login') }}" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Register</a>
                @endif
            @endauth
        </nav>
    </header>

    <!-- JavaScript to Handle Hover Events -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdown = document.getElementById('profile-dropdown');
            const dropdownMenu = dropdown.querySelector('div');

            // Delay before hiding the dropdown
            let timeout;

            dropdown.addEventListener('mouseover', function() {
                clearTimeout(timeout);
                dropdownMenu.classList.remove('opacity-0', 'pointer-events-none');
                dropdownMenu.classList.add('opacity-100', 'pointer-events-auto');
            });

            dropdown.addEventListener('mouseout', function() {
                timeout = setTimeout(function() {
                    dropdownMenu.classList.remove('opacity-100', 'pointer-events-auto');
                    dropdownMenu.classList.add('opacity-0', 'pointer-events-none');
                }, 200);  // Slight delay before hiding to allow smoother interaction
            });
        });
    </script>


    <!-- Hero Section -->
    <div class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-red-500 via-red-600 to-red-800 opacity-70"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
            <div class="text-center">
                <img src="{{ asset('images/logo.svg') }}" alt="RobbinsBuilds Logo" class="mx-auto h-32 mb-6 hover:scale-110 transform transition-all duration-500">
                <h1 class="text-6xl font-bold text-white drop-shadow-lg mb-6">Welcome to RobbinsBuilds</h1>
                <p class="text-2xl text-white drop-shadow-md mb-10">
                    Professional web development and marketing solutions tailored to elevate your business.
                </p>
                <a href="/services" class="inline-block px-12 py-4 bg-white text-red-600 rounded-full text-xl font-medium shadow-lg hover:shadow-xl hover:bg-red-600 hover:text-white transition-all duration-300">
                    Explore Our Services
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-12">Our Se1111111111111rvices</h2>
        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Service 1 -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-laptop-code text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600">Custom Web Development</h3>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    We build stunning, responsive websites tailored to your business needs and optimized for performance.
                </p>
            </div>
            <!-- Service 2 -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-bullhorn text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600">Digital Marketing</h3>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    Our marketing solutions help you stand out online, attract more customers, and achieve your business goals.
                </p>
            </div>
            <!-- Service 3 -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-server text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600">Backend Solutions</h3>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    Reliable and scalable backend systems that ensure your website or app runs smoothly and securely.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 bg-gray-100 dark:bg-gray-800 rounded-xl text-center">
        <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-12">What Our Clients Say</h2>
        <div class="grid gap-12 lg:grid-cols-2">
            <!-- Testimonial 1 -->
            <div class="p-8 bg-white rounded-lg shadow-lg dark:bg-gray-700 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <blockquote class="text-gray-800 dark:text-gray-300 italic">
                    "RobbinsBuilds delivered a top-notch website for our company. Their attention to detail and ability to meet deadlines was impressive!"
                </blockquote>
                <p class="mt-6 text-right font-semibold text-red-600">— Jane Doe, CEO of XYZ Corp</p>
            </div>
            <!-- Testimonial 2 -->
            <div class="p-8 bg-white rounded-lg shadow-lg dark:bg-gray-700 transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <blockquote class="text-gray-800 dark:text-gray-300 italic">
                    "The marketing strategies recommended by RobbinsBuilds helped increase our online visibility and boosted sales significantly!"
                </blockquote>
                <p class="mt-6 text-right font-semibold text-red-600">— John Smith, Marketing Head at ABC Inc</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-8">Ready to Get Started?</h2>
        <p class="max-w-2xl mx-auto text-lg text-gray-700 dark:text-gray-300 mb-8">
            Contact us today to discuss your project requirements or request a quote. We are excited to work with you and help your business succeed.
        </p>
        <a href="/contact" class="inline-block px-12 py-4 bg-red-600 text-white rounded-full text-xl font-medium shadow-lg hover:shadow-xl hover:bg-red-500 transition-all duration-300">
            Contact Us
        </a>
    </section>

    <!-- Footer -->
    <footer class="py-10 text-center text-sm text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-800">
        RobbinsBuilds © {{ date('Y') }} | All Rights Reserved
    </footer>

</body>
</html>
