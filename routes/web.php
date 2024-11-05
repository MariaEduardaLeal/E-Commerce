<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

route::get('/', [UserController:: class, 'index']);



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
    Route::get('redirect', [UserController::class, 'redirect']);
    Route::get('login-page', [UserController::class, 'loginPage'])->name('login-page');
    Route::get('register-page', [UserController::class, 'registerPage'])->name('register-page');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
});

