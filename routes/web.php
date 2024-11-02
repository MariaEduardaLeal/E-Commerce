<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

route::get('redirect', [HomeController:: class, 'redirect']);

route::get('/login-page', [HomeController::class, 'loginPage'])->name('login-page');
route::get('/register-page', [HomeController::class, 'registerPage'])->name('register-page');
route::get('/profile', [HomeController::class, 'profile'])->name('profile');
