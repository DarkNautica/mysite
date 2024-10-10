<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Two-Factor Authentication Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="bg-gray-50 dark:bg-gray-900 dark:text-white min-h-screen flex items-center justify-center">

    <!-- Main Container -->
    <div class="max-w-lg mx-auto w-full p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg">
        <!-- Header -->
        <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-white mb-6">Two-Factor Authentication</h1>
        
        <!-- Card Content -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
            <h5 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 text-center">Verify Your Identity</h5>
            <p class="text-gray-700 dark:text-gray-300 text-center mb-6">
                Please enter the 6-digit verification code that was sent to your email address.
            </p>

            <!-- Form Section -->
            <form action="{{ route('2fa.verify.post') }}" method="POST">
                @csrf

                <!-- Verification Code Input -->
                <div class="mb-4">
                    <label for="verify-code" class="block text-lg font-medium text-gray-900 dark:text-white">Verification Code:</label>
                    <input type="text" name="verify-code" id="verify-code" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white @error('verify-code') border-red-500 dark:border-red-500 @enderror" required>
                    @error('verify-code')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="inline-block w-full px-6 py-3 bg-red-600 text-white font-medium rounded-lg shadow-lg hover:bg-red-500 transition duration-300">Verify Code</button>
                </div>
            </form>
        </div>

        <!-- Resend Code Link -->
        <div class="text-center mt-6">
            <p class="text-gray-700 dark:text-gray-300">
                Didn't receive the code? <a href="{{ route('2fa.setup') }}" class="text-red-600 hover:text-red-500 transition duration-300">Resend Code</a>
            </p>
        </div>
    </div>
</body>
</html>
