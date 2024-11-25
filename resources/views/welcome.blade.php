<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RobbinsBuilds - Welcome</title>
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 dark:text-white transition-all duration-300">

    <!-- Header Section -->
    <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex items-center justify-between shadow-md">
        <div class="flex items-center">
            <img src="{{ asset('images/logo.svg') }}" alt="RobbinsBuilds Logo" class="h-12 w-auto hover:scale-105 transform transition-all duration-300" loading="lazy">
        </div>
        <nav class="flex space-x-6 items-center">
            <a href="/" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400">Home</a>
            <a href="/about" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400">About</a>
            <a href="/services" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400">Services</a>
            <a href="/contact" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400">Contact</a>
            @auth
                <a href="/dashboard" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400">Dashboard</a>
            @endauth
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-red-500 via-red-600 to-red-800 opacity-70"></div>
        <div class="relative max-w-7xl mx-auto px-6 sm:px-8 py-32 text-center">
            <img src="{{ asset('images/logo.svg') }}" alt="RobbinsBuilds Logo" class="mx-auto h-24 mb-6" loading="lazy">
            <h1 class="text-6xl font-bold text-white drop-shadow-lg">Welcome to RobbinsBuilds</h1>
            <p class="text-2xl text-white mt-4">
                Professional web development and marketing solutions tailored to elevate your business.
            </p>
            <a href="/services" class="mt-10 inline-block px-10 py-4 bg-white text-red-600 rounded-full shadow-lg hover:shadow-xl hover:bg-red-600 hover:text-white transition-all">
                Explore Our Services
            </a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-6 sm:px-8 bg-gray-50 dark:bg-gray-900 text-center">
        <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-12">Our Services</h2>
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-lg transform hover:scale-105 transition-all">
                <i class="fas fa-laptop-code text-red-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Custom Web Development</h3>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    Stunning, responsive websites optimized for performance and tailored to your needs.
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-lg transform hover:scale-105 transition-all">
                <i class="fas fa-bullhorn text-red-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Digital Marketing</h3>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    Marketing strategies to boost online visibility and grow your customer base.
                </p>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-lg transform hover:scale-105 transition-all">
                <i class="fas fa-server text-red-600 text-4xl mb-4"></i>
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Backend Solutions</h3>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    Reliable backend systems ensuring smooth, secure operations for your business.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 px-6 sm:px-8 bg-gray-100 dark:bg-gray-800 rounded-xl text-center">
        <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-12">What Our Clients Say</h2>
        <div class="grid gap-12 lg:grid-cols-2">
            <div class="p-8 bg-white rounded-lg shadow-lg dark:bg-gray-700 hover:shadow-xl transform hover:scale-105 transition-all">
                <blockquote class="text-gray-800 dark:text-gray-300 italic">
                    "RobbinsBuilds delivered a top-notch website for our company. Their attention to detail and ability to meet deadlines was impressive!"
                </blockquote>
                <p class="mt-6 text-right font-semibold text-red-600">— Jane Doe, CEO of XYZ Corp</p>
            </div>
            <div class="p-8 bg-white rounded-lg shadow-lg dark:bg-gray-700 hover:shadow-xl transform hover:scale-105 transition-all">
                <blockquote class="text-gray-800 dark:text-gray-300 italic">
                    "The marketing strategies recommended by RobbinsBuilds helped increase our online visibility and boosted sales significantly!"
                </blockquote>
                <p class="mt-6 text-right font-semibold text-red-600">— John Smith, Marketing Head at ABC Inc</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 px-6 sm:px-8 text-center">
        <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-8">Ready to Get Started?</h2>
        <p class="max-w-2xl mx-auto text-lg text-gray-700 dark:text-gray-300 mb-8">
            Contact us today to discuss your project requirements or request a quote. We are excited to work with you and help your business succeed.
        </p>
        <a href="/contact" class="inline-block px-12 py-4 bg-red-600 text-white rounded-full text-xl font-medium shadow-lg hover:shadow-xl hover:bg-red-500 transition-all">
            Contact Us
        </a>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-100 dark:bg-gray-800 text-center">
        <p class="text-gray-600 dark:text-gray-400">© {{ date('Y') }} RobbinsBuilds | All Rights Reserved</p>
    </footer>

</body>
</html>
