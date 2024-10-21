<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AzkarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/upload-image', [AuthController::class, 'uploadImage']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/resend-otp', [AuthController::class, 'resendOTP']);
// Route::put('/update-profile', [AuthController::class, 'updateProfile'])->middleware('auth:sanctum');
Route::put('/update-profile/{id}', [AuthController::class, 'updateProfile']);

// for unauthenticated users
Route::get('/login', function () {
    return response()->json(['error' => 'Unauthenticated.'], 401);
})->name('login');

// forgot password
// Route::post('password/email', [AuthController::class, 'sendResetLinkEmail']);
Route::post('password/reset', [AuthController::class, 'resetPassword']);

// Password Reset Routes
// Route::get('password/reset', [AuthController::class, 'requestReset'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLink'])->name('password.email');
//for laravel itself, we don;t use it
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
// Route::post('password/reset', [AuthController::class, 'resetPassword'])->name('password.update');


// if user forgets email, then they provide phone number to get OTP on email
Route::post('/request-email-otp', [AuthController::class, 'requestEmailOtp']);
Route::post('/verify-email-otp', [AuthController::class, 'verifyEmailOtp']);

// get all users
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{term}', [UserController::class, 'search']);


// Delete user
Route::delete('/users/{id}', [UserController::class, 'destroy']);
Route::get('/send-test-email', [UserController::class, 'sendTestEmail']);


//azkars
Route::post('/azkars', [AzkarController::class, 'store']);
Route::get('/azkars', [AzkarController::class, 'index']);
Route::delete('/azkar/{id}', [AzkarController::class, 'destroy'])->name('azkar.destroy');

Route::get('/clear-all-caches', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('config:cache');

    return 'All caches cleared!';
});


