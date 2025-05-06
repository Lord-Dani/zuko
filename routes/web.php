<?php

use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Аутентификация
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('password.request');

// Защищенные маршруты (только для авторизованных пользователей)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');
});

// Другие страницы
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/delivery', function () {
    return view('delivery');
})->name('delivery');

Route::get('/vacancies', function () {
    return view('vacancies');
})->name('vacancies');