<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // Import the DashboardController
use App\Http\Controllers\TwoFactorController;
use App\Http\Middleware\TwoFactorMiddleware;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Protect routes with the TwoFactorMiddleware
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']) // Update dashboard route to use controller
        ->middleware([TwoFactorMiddleware::class])
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 2FA Routes for setting up and verifying 2FA
Route::middleware(['auth'])->group(function () {
    // Route to generate and send the code, always redirect to verify
    Route::get('2fa/setup', [TwoFactorController::class, 'show2faSetup'])->name('2fa.setup');

    // Route to display the verification form
    Route::get('2fa/verify', [TwoFactorController::class, 'show2faVerify'])->name('2fa.verify');

    // Route to handle the form submission and verification of the code
    Route::post('2fa/verify', [TwoFactorController::class, 'verify2fa'])->name('2fa.verify.post');

    // Route to disable 2FA if needed
    Route::post('2fa/disable', [TwoFactorController::class, 'disable2fa'])->name('2fa.disable');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/showcase', function () {
    return view('showcase');
});


// Ensure auth routes are registered
require __DIR__.'/auth.php';
