<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    OrderController,
    CartController,
    ProfileController,
    MainController,
    AboutController,
    DeliveryController,
    VacanciesController
};

// Public Routes
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/menu', [MainController::class, 'index'])->name('menu');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery');
Route::get('/vacancies', [VacanciesController::class, 'index'])->name('vacancies');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Profile
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile');
        Route::post('/settings', [ProfileController::class, 'updateSettings'])->name('profile.settings');
        Route::post('/address', [ProfileController::class, 'updateAddress'])->name('profile.address');
    });

    // Orders
    Route::resource('orders', OrderController::class)->only(['index', 'store', 'destroy']);

    // Cart
    Route::resource('cart', CartController::class)->only(['index', 'store', 'destroy']);
    Route::delete('cart/{index}', [CartController::class, 'destroyItem'])->name('cart.remove-item');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});