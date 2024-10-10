<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Services | RobbinsBuilds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 dark:text-white transition-all duration-300">

    <!-- Header Section with Auth Logic -->
    <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 px-6 py-4 flex items-center justify-between shadow-md transition-all duration-300">
        <div class="flex items-center">
            <!-- Logo -->
            <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="RobbinsBuilds Logo" class="h-32 w-auto hover:scale-105 transform transition-all duration-300">
            </a>
        </div>
        <nav class="flex space-x-6 items-center">
            <a href="/" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Home</a>
            <a href="/about" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">About</a>
            <a href="/services" class="text-lg font-medium text-red-600 dark:text-red-400 transition-all duration-300">Services</a>
            <a href="/contact" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Contact</a>

            <!-- Dashboard Button Styled as a Header Link (Only for Authenticated Users) -->
            @auth
                <a href="/dashboard" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Dashboard</a>
            @endauth

            <!-- Profile Dropdown for Authenticated Users -->
            @auth
                <div class="relative group" id="profile-dropdown">
                    <!-- Profile Button -->
                    <button class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300 flex items-center">
                        <span class="mr-2">{{ Auth::user()->name }}</span>
                        <i class="fas fa-user-circle text-2xl"></i>
                    </button>
                    
                    <!-- Dropdown Menu -->
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
                <!-- Login and Register Links for Guests -->
                <a href="{{ route('login') }}" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Register</a>
                @endif
            @endauth
        </nav>
    </header>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-16">
        <!-- Services Section -->
        <section class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-8">Our Services</h1>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-12 max-w-4xl mx-auto">
                RobbinsBuilds offers a range of professional services to help businesses establish and grow their online presence. 
                Our solutions are designed to cater to both startups and established enterprises, providing top-quality service that guarantees satisfaction.
            </p>
        </section>

        <!-- Service Offerings -->
        <section class="grid gap-12 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- Service 1: Custom Web Development -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-laptop-code text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600 mb-4">Custom Web Development</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    We create high-performance websites tailored to your specific needs. Our designs are responsive, ensuring your website looks great on all devices.
                </p>
                <a href="#" class="text-red-600 hover:text-red-400 transition-all duration-300">Learn More →</a>
            </div>

            <!-- Service 2: Digital Marketing -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-bullhorn text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600 mb-4">Digital Marketing</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    Our marketing strategies are designed to boost your online presence and attract more customers. From SEO to social media marketing, we’ve got you covered.
                </p>
                <a href="#" class="text-red-600 hover:text-red-400 transition-all duration-300">Learn More →</a>
            </div>

            <!-- Service 3: Backend Solutions -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-server text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600 mb-4">Backend Solutions</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    We provide scalable and secure backend systems that support your website or app. Our solutions are built for performance and security.
                </p>
                <a href="#" class="text-red-600 hover:text-red-400 transition-all duration-300">Learn More →</a>
            </div>

            <!-- Service 4: Branding and Design -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-paint-brush text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600 mb-4">Branding & Design</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    We craft stunning logos, brand identities, and visual assets that reflect your brand’s essence and set you apart from the competition.
                </p>
                <a href="#" class="text-red-600 hover:text-red-400 transition-all duration-300">Learn More →</a>
            </div>

            <!-- Service 5: eCommerce Development -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-shopping-cart text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600 mb-4">eCommerce Development</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    Our eCommerce solutions enable you to manage and grow your online store with ease. We build secure, user-friendly platforms for your business.
                </p>
                <a href="#" class="text-red-600 hover:text-red-400 transition-all duration-300">Learn More →</a>
            </div>

            <!-- Service 6: Technical Support & Maintenance -->
            <div class="p-8 bg-white rounded-xl shadow-lg dark:bg-gray-800 transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <i class="fas fa-tools text-6xl text-red-600 mb-6"></i>
                <h3 class="text-2xl font-bold text-red-600 mb-4">Technical Support & Maintenance</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    We provide ongoing support and maintenance to ensure your website or application runs smoothly, minimizing downtime and disruptions.
                </p>
                <a href="#" class="text-red-600 hover:text-red-400 transition-all duration-300">Learn More →</a>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 text-center">
            <h2 class="text-4xl font-semibold text-gray-900 dark:text-white mb-8">Ready to Grow Your Business?</h2>
            <p class="max-w-3xl mx-auto text-lg text-gray-700 dark:text-gray-300 mb-8">
                Get in touch with us today to discuss how we can help your business thrive with our professional services and tailored solutions.
            </p>
            <a href="/contact" class="inline-block px-12 py-4 bg-red-600 text-white rounded-full text-xl font-medium shadow-lg hover:shadow-xl hover:bg-red-500 transition-all duration-300">
                Contact Us
            </a>
        </section>
    </div>

    <!-- Footer -->
    <footer class="py-10 text-center text-sm text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-800">
        RobbinsBuilds © {{ date('Y') }} | All Rights Reserved
    </footer>

</body>
</html>
