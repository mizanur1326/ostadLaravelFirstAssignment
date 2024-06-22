<?php

use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/profile/{id}', [ProfileController::class, 'index']);

Route::get('/get-cookie', [CookieController::class, 'getCookieValue']);