<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | RobbinsBuilds</title>
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
            <a href="/services" class="text-lg font-medium text-gray-600 dark:text-gray-300 hover:text-red-600 dark:hover:text-red-400 transition-all duration-300">Services</a>
            <a href="/contact" class="text-lg font-medium text-red-600 dark:text-red-400 transition-all duration-300">Contact</a>

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
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 py-16">
        <!-- Contact Section -->
        <section class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 dark:text-white mb-8">Contact Us</h1>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-12 max-w-3xl mx-auto">
                Have any questions or want to discuss your project? Fill out the form below, and we'll get back to you as soon as possible. We look forward to working with you!
            </p>
        </section>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-800 border border-green-200 px-4 py-3 rounded-lg mb-8 text-center">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <section class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-8 mb-16">
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf

                <!-- Name Field -->
                <div class="mb-6">
                    <label for="name" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="block w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-200 focus:ring-red-500 focus:border-red-500 dark:focus:ring-red-400 dark:focus:border-red-400 transition duration-300" required>
                </div>

                <!-- Email Field -->
                <div class="mb-6">
                    <label for="email" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="block w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-200 focus:ring-red-500 focus:border-red-500 dark:focus:ring-red-400 dark:focus:border-red-400 transition duration-300" required>
                </div>

                <!-- Service Selection -->
                <div class="mb-6">
                    <label class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Select Your Desired Service(s)</label>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Service Checkbox 1 -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="services[]" value="Custom Web Development" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-600 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-400 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-gray-800 dark:text-gray-300">Custom Web Development</span>
                            </label>
                        </div>
                        <!-- Service Checkbox 2 -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="services[]" value="Digital Marketing" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-600 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-400 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-gray-800 dark:text-gray-300">Digital Marketing</span>
                            </label>
                        </div>
                        <!-- Service Checkbox 3 -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="services[]" value="Backend Solutions" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-600 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-400 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-gray-800 dark:text-gray-300">Backend Solutions</span>
                            </label>
                        </div>
                        <!-- Service Checkbox 4 -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="services[]" value="Branding & Design" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-600 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-400 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-gray-800 dark:text-gray-300">Branding & Design</span>
                            </label>
                        </div>
                        <!-- Service Checkbox 5 -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="services[]" value="eCommerce Development" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-600 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-400 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-gray-800 dark:text-gray-300">eCommerce Development</span>
                            </label>
                        </div>
                        <!-- Service Checkbox 6 -->
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="services[]" value="Technical Support & Maintenance" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-600 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-400 dark:focus:ring-offset-gray-800">
                                <span class="ml-2 text-gray-800 dark:text-gray-300">Technical Support & Maintenance</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Message Field -->
                <div class="mb-6">
                    <label for="message" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Your Message</label>
                    <textarea id="message" name="message" rows="6" class="block w-full px-4 py-3 rounded-lg bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-800 dark:text-gray-200 focus:ring-red-500 focus:border-red-500 dark:focus:ring-red-400 dark:focus:border-red-400 transition duration-300" placeholder="Tell us about your project or any specific requirements you have..." required></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="px-8 py-3 bg-red-600 text-white rounded-full text-lg font-medium shadow-lg hover:shadow-xl hover:bg-red-500 transition-all duration-300">
                        Send Message
                    </button>
                </div>
            </form>
        </section>
    </div>

    <!-- Footer -->
    <footer class="py-10 text-center text-sm text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-800">
        RobbinsBuilds © {{ date('Y') }} | All Rights Reserved
    </footer>

</body>
</html>
