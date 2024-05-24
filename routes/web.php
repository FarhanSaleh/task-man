<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/task', function () {
    return view('task.index');
});
Route::get('/history', function () {
    return view('history.index');
});
