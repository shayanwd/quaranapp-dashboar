<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppStats;

/*
|--------------------------------------------------------------------------|
| Web Routes
|--------------------------------------------------------------------------|
*/

// Redirect root to login or dashboard based on authentication
Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/dashboard'); // User is authenticated
    } else {
        return redirect('/login'); // User is not authenticated
    }
});

// Login routes
Route::get('/login', [HomeController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [HomeController::class, 'authenticate'])->name('login.post')->middleware('guest');

//if user visits /login after logged in our guest middleware takes user to /home, so we're redirecting to dashboard.
Route::get('/home', function () {
    return redirect('/dashboard');  // Redirect /home to /dashboard
});


// Authenticated routes
Route::middleware(['auth', 'no.cache', 'prevent.back.history'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/app-users', [HomeController::class, 'appUsers'])->name('app.users');
    Route::get('/azkar', [HomeController::class, 'azkar'])->name('azkar');
    Route::get('/settings', [HomeController::class, 'settings'])->name('settings');
});


// Logout route
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
