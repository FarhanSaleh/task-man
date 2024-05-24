<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\DashboardController::class);
Route::get('/task', [Controllers\TaskController::class, 'index']);
Route::get('/history', [Controllers\HistoryController::class, 'index']);
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/profile', function () {
    return view('profile.index');
});
