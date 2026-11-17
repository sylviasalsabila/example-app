<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClubController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [UserController::class, 'index']);
Route::resource('club',ClubController::class);
Route::resource('user', UserController::class);