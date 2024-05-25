<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\DashboardController::class)->name('dashboard');
Route::get('/task', [Controllers\TaskController::class, 'index']);
Route::get('/history', [Controllers\HistoryController::class, 'index']);

Route::resource('users', Controllers\UserController::class);

Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login');
Route::post('login', [Controllers\LoginController::class, 'authenticate']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/profile', function () {
    return view('profile.index');
});
