<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home/home');
});
Route::get('/about', function () {
    return view('About/about');
});
Route::get('/contract', function () {
    return view('Contract/contract');
});
