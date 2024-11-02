<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

route::get('/', [HomeController:: class, 'index']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('view')->group(function () {
    Route::get('redirect', [HomeController::class, 'redirect']);
    Route::get('login-page', [LoginController::class, 'loginPage'])->name('login-page');
    Route::get('register-page', [RegisterController::class, 'registerPage'])->name('register-page');
    Route::get('profile', [LoginController::class, 'profile'])->name('profile');
});

