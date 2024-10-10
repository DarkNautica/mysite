<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login | RobbinsBuilds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Use the favicon as the logo -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
</head>
<body class="bg-gray-50 dark:bg-gray-900 dark:text-white min-h-screen flex items-center justify-center">

    <!-- Main Container -->
    <div class="max-w-md mx-auto w-full p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
        <!-- Logo Section -->
        <div class="text-center mb-6">
            <img src="{{ asset('images/favicon.png') }}" alt="RobbinsBuilds Logo" class="mx-auto h-16 w-16 mb-4">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Login</h1>
        </div>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-lg font-medium text-gray-900 dark:text-white">Email</label>
                <input id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('email') border-red-500 dark:border-red-500 @enderror" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-lg font-medium text-gray-900 dark:text-white">Password</label>
                <input id="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('password') border-red-500 dark:border-red-500 @enderror" type="password" name="password" required autocomplete="current-password">
                @error('password')
                <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me Checkbox -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 dark:bg-gray-900 dark:border-gray-700 text-red-600 shadow-sm focus:ring-red-500 dark:focus:ring-red-600 dark:focus:ring-offset-gray-800" name="remember">
                <label for="remember_me" class="ml-2 text-sm text-gray-600 dark:text-gray-400">Remember me</label>
            </div>

            <!-- Forgot Password Link -->
            <div class="flex items-center justify-between mb-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-red-600 hover:text-red-500 transition duration-300" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="inline-block w-full px-6 py-3 bg-red-600 text-white font-medium rounded-lg shadow-lg hover:bg-red-500 transition duration-300">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
