<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BrightLabs - Creative Agency for Modern Solutions">
    <title>BrightLabs - Innovating Creativity</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
        }
        /* Custom Colors */
        .text-teal-500 {
            color: #38b2ac;
        }
        .bg-teal-500 {
            background-color: #38b2ac;
        }
        .bg-purple-600 {
            background-color: #805ad5;
        }
        .hover\\:bg-teal-600:hover {
            background-color: #319795;
        }
    </style>
</head>
<body class="antialiased">

    <!-- Navbar -->
    <header class="bg-gray-100 py-4 shadow-lg">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-6">
            <a href="/" class="text-teal-500 font-bold text-2xl">BrightLabs</a>
            <nav class="space-x-6">
                <a href="#about" class="text-gray-700 hover:text-teal-500 transition">About</a>
                <a href="#services" class="text-gray-700 hover:text-teal-500 transition">Services</a>
                <a href="#portfolio" class="text-gray-700 hover:text-teal-500 transition">Portfolio</a>
                <a href="#team" class="text-gray-700 hover:text-teal-500 transition">Team</a>
                <a href="#contact" class="text-gray-700 hover:text-teal-500 transition">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-teal-500 text-white py-32">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-4">Innovating Creativity at BrightLabs</h1>
            <p class="text-lg mb-8">We transform ideas into reality with cutting-edge technology and creative strategies.</p>
            <a href="#services" class="inline-block px-8 py-4 bg-white text-teal-500 rounded-full font-semibold hover:bg-teal-600 hover:text-white transition-all duration-300">Discover Our Services</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-50 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">About BrightLabs</h2>
            <p class="text-lg text-gray-700 mb-8">BrightLabs is a creative agency that specializes in web development, branding, marketing, and consulting. Our mission is to empower businesses by providing innovative solutions that drive growth and success.</p>
            <img src="https://via.placeholder.com/800x400" alt="Office Image" class="w-full h-80 object-cover rounded-lg shadow-lg">
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">Our Services</h2>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition transform hover:scale-105">
                    <h3 class="text-2xl font-bold text-teal-500 mb-4">Web Development</h3>
                    <p class="text-gray-700">Custom web development solutions tailored to your business needs, ensuring a robust digital presence.</p>
                </div>
                <!-- Service 2 -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition transform hover:scale-105">
                    <h3 class="text-2xl font-bold text-teal-500 mb-4">Branding & Identity</h3>
                    <p class="text-gray-700">Creating cohesive and memorable brand experiences that resonate with your target audience.</p>
                </div>
                <!-- Service 3 -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition transform hover:scale-105">
                    <h3 class="text-2xl font-bold text-teal-500 mb-4">Marketing Strategy</h3>
                    <p class="text-gray-700">Data-driven marketing strategies that increase engagement and drive conversions.</p>
                </div>
                <!-- Service 4 -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition transform hover:scale-105">
                    <h3 class="text-2xl font-bold text-teal-500 mb-4">UI/UX Design</h3>
                    <p class="text-gray-700">Designing user interfaces and experiences that are visually appealing and easy to navigate.</p>
                </div>
                <!-- Service 5 -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition transform hover:scale-105">
                    <h3 class="text-2xl font-bold text-teal-500 mb-4">Consulting</h3>
                    <p class="text-gray-700">Providing insights and guidance to help you make informed decisions and achieve your goals.</p>
                </div>
                <!-- Service 6 -->
                <div class="p-6 bg-white rounded-lg shadow-lg transition transform hover:scale-105">
                    <h3 class="text-2xl font-bold text-teal-500 mb-4">Content Creation</h3>
                    <p class="text-gray-700">Producing compelling content that connects with your audience and communicates your message effectively.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">Our Work</h2>
            <div class="grid gap-8 lg:grid-cols-3">
                <img src="https://via.placeholder.com/400" alt="Project 1" class="rounded-lg shadow-lg transition transform hover:scale-105">
                <img src="https://via.placeholder.com/400" alt="Project 2" class="rounded-lg shadow-lg transition transform hover:scale-105">
                <img src="https://via.placeholder.com/400" alt="Project 3" class="rounded-lg shadow-lg transition transform hover:scale-105">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-16 text-center">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 mb-12">Meet Our Team</h2>
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <!-- Team Member 1 -->
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-teal-500">Alex Johnson</h3>
                    <p class="text-gray-700">Founder & CEO</p>
                </div>
                <!-- Team Member 2 -->
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Team Member 2" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-teal-500">Taylor Lee</h3>
                    <p class="text-gray-700">Lead Developer</p>
                </div>
                <!-- Team Member 3 -->
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Team Member 3" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-teal-500">Jordan Clark</h3>
                    <p class="text-gray-700">Creative Director</p>
                </div>
                <!-- Team Member 4 -->
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/150" alt="Team Member 4" class="w-32 h-32 rounded-full mx-auto mb-4">
                    <h3 class="text-xl font-bold text-teal-500">Morgan Smith</h3>
                    <p class="text-gray-700">Marketing Strategist</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-50 text-center">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-4xl font-bold text-gray-900 mb-8">Get in Touch</h2>
            <p class="text-lg text-gray-700 mb-8">Have any questions or want to discuss your project? Drop us a message and we'll get back to you shortly.</p>
            <form action="#" method="POST" class="bg-white rounded-lg shadow-lg p-8 text-left">
                <div class="mb-4">
                    <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Your Name</label>
                    <input type="text" id="name" name="name" class="block w-full px-4 py-3 rounded-lg bg-gray-100 border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition duration-300" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-lg font-medium text-gray-700 mb-2">Your Email</label>
                    <input type="email" id="email" name="email" class="block w-full px-4 py-3 rounded-lg bg-gray-100 border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition duration-300" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-lg font-medium text-gray-700 mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" class="block w-full px-4 py-3 rounded-lg bg-gray-100 border border-gray-300 focus:ring-teal-500 focus:border-teal-500 transition duration-300" required></textarea>
                </div>
                <button type="submit" class="px-8 py-4 bg-teal-500 text-white rounded-lg font-semibold hover:bg-teal-600 transition-all duration-300">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-10 text-center text-sm text-gray-600 bg-gray-100">
        BrightLabs © {{ date('Y') }} | All Rights Reserved
    </footer>

</body>
</html>
