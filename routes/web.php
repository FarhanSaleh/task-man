<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', Controllers\DashboardController::class)->name('dashboard')->middleware('auth');
Route::get('/history', [Controllers\HistoryController::class, 'index'])->middleware('auth');
Route::resource('task', Controllers\TaskController::class)->middleware('auth');
Route::put('/task/delete/{id}', [Controllers\TaskController::class, 'delete'])->middleware('auth');
Route::put('/task/status/{id}/{status}', [Controllers\TaskController::class, 'status'])->middleware('auth');

Route::resource('users', Controllers\UserController::class);
Route::put('/users/role/{id}/{role}', [Controllers\UserController::class, 'role'])->middleware('auth');

Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');
Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/profile', function () {
    return view('profile.index');
})->middleware('auth');
Route::put('/profile/password/{id}', [Controllers\UserController::class, 'updatePassword'])->middleware('auth');
