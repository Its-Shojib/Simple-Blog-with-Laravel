<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('Home/home');
});
Route::get('/about', function () {
    return view('About/about');
});
Route::get('/contract', function () {
    return view('Contract/contract');
});

Route::get('/users', [UserController::class, 'getUser']);
