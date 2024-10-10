<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | RobbinsBuilds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        /* Flip Animation Styles */
        .card-container {
            perspective: 1000px;
        }
        .card {
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .card:hover {
            transform: rotateY(180deg);
        }
        .card-front,
        .card-back {
            backface-visibility: hidden;
            transition: opacity 0.3s;
        }
        .card-front {
            transform: rotateY(0deg);
        }
        .card-back {
            transform: rotateY(180deg);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
    </style>
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
            <a href="/about" class="text-lg font-medium text-red-600 dark:text-red-400 transition-all duration-300">About</a>
            <a href="/services" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Services</a>
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
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 py-16">
        <!-- About Section -->
        <section class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-6">About RobbinsBuilds</h1>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-12">
                At RobbinsBuilds, we are dedicated to helping businesses establish a strong online presence by providing professional web development services.
                Our team specializes in creating stunning websites that are not only visually appealing but also optimized for performance and usability.
                We understand the importance of a robust digital footprint in today’s competitive landscape and strive to deliver solutions that cater to your unique needs.
            </p>
            <a href="/services" class="inline-block px-8 py-3 bg-red-600 text-white rounded-full text-lg font-medium hover:bg-red-500 transition">
                Discover Our Services
            </a>
        </section>

        <!-- Owners Section with Flip Animation -->
        <section class="py-16">
            <h2 class="text-3xl font-semibold text-center text-gray-900 dark:text-white mb-10">Meet Our Founders</h2>
            <div class="grid gap-12 md:grid-cols-2 lg:grid-cols-3">
                <!-- Owner 1: Jayden Robbins -->
                <div class="card-container relative w-full h-64">
                    <div class="card relative w-full h-full rounded-lg shadow-lg bg-white dark:bg-gray-800">
                        <div class="card-front absolute w-full h-full flex flex-col items-center justify-center bg-white dark:bg-gray-800 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600 mb-2">Jayden Robbins</h3>
                            <p class="text-lg text-gray-700 dark:text-gray-300 text-center">
                                Co-Founder & Lead Developer
                            </p>
                        </div>
                        <div class="card-back absolute w-full h-full flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600">About Jayden</h3>
                            <p class="mt-2 text-gray-700 dark:text-gray-300 text-center">
                                Jayden is a self-taught programmer with extensive experience in web development and project management. He leads the technical side of the business, ensuring every project meets the highest standards.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Owner 2: Dean Robbins -->
                <div class="card-container relative w-full h-64">
                    <div class="card relative w-full h-full rounded-lg shadow-lg bg-white dark:bg-gray-800">
                        <div class="card-front absolute w-full h-full flex flex-col items-center justify-center bg-white dark:bg-gray-800 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600 mb-2">Dean Robbins</h3>
                            <p class="text-lg text-gray-700 dark:text-gray-300 text-center">
                                Co-Founder & Marketing Director
                            </p>
                        </div>
                        <div class="card-back absolute w-full h-full flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600">About Dean</h3>
                            <p class="mt-2 text-gray-700 dark:text-gray-300 text-center">
                                Dean is a marketing strategist with a passion for helping businesses grow. He oversees the marketing and client relationship aspects, ensuring all clients receive exceptional service.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Owner 3: Joey Robbins -->
                <div class="card-container relative w-full h-64">
                    <div class="card relative w-full h-full rounded-lg shadow-lg bg-white dark:bg-gray-800">
                        <div class="card-front absolute w-full h-full flex flex-col items-center justify-center bg-white dark:bg-gray-800 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600 mb-2">Joey Robbins</h3>
                            <p class="text-lg text-gray-700 dark:text-gray-300 text-center">
                                Technical Consultant
                            </p>
                        </div>
                        <div class="card-back absolute w-full h-full flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600">About Joey</h3>
                            <p class="mt-2 text-gray-700 dark:text-gray-300 text-center">
                                Joey brings years of technical consulting experience and offers critical insights to streamline project delivery and technical solutions for clients.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Owner 4: Cynthia Robbins -->
                <div class="card-container relative w-full h-64">
                    <div class="card relative w-full h-full rounded-lg shadow-lg bg-white dark:bg-gray-800">
                        <div class="card-front absolute w-full h-full flex flex-col items-center justify-center bg-white dark:bg-gray-800 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600 mb-2">Cynthia Robbins</h3>
                            <p class="text-lg text-gray-700 dark:text-gray-300 text-center">
                                Project Coordinator
                            </p>
                        </div>
                        <div class="card-back absolute w-full h-full flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600">About Cynthia</h3>
                            <p class="mt-2 text-gray-700 dark:text-gray-300 text-center">
                                Cynthia manages project timelines and client communications, ensuring that projects are delivered on time and exceed expectations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Owner 5: Jace Robbins -->
                <div class="card-container relative w-full h-64">
                    <div class="card relative w-full h-full rounded-lg shadow-lg bg-white dark:bg-gray-800">
                        <div class="card-front absolute w-full h-full flex flex-col items-center justify-center bg-white dark:bg-gray-800 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600 mb-2">Jace Robbins</h3>
                            <p class="text-lg text-gray-700 dark:text-gray-300 text-center">
                                Business Analyst
                            </p>
                        </div>
                        <div class="card-back absolute w-full h-full flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-700 rounded-lg px-6">
                            <h3 class="text-2xl font-bold text-red-600">About Jace</h3>
                            <p class="mt-2 text-gray-700 dark:text-gray-300 text-center">
                                Jace specializes in analyzing business requirements and finding effective solutions to meet client needs, contributing to the growth and success of RobbinsBuilds.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 text-center">
            <h2 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6">Ready to Take Your Business Online?</h2>
            <p class="max-w-xl mx-auto text-lg text-gray-700 dark:text-gray-300 mb-6">
                Contact us today to discuss your project and get started with a professional website tailored to your needs.
            </p>
            <a href="/contact" class="inline-block px-8 py-3 bg-red-600 text-white rounded-full text-lg font-medium hover:bg-red-500 transition">
                Get In Touch
            </a>
        </section>
    </div>

    <!-- Footer -->
    <footer class="py-10 text-center text-sm text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-800">
        RobbinsBuilds © {{ date('Y') }} | All Rights Reserved
    </footer>

</body>
</html>
