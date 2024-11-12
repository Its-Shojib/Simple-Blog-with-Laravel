<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('Home/home');
});
Route::get('/about', function () {
    return view('About/about');
});
//This will work
// Route::get('/contract', function () {
//     return view('Contract/contract');
// });

//This will also work
Route::view('/contract', 'Contract/contract')->name('ct');

Route::get('/users', [UserController::class, 'getUser']);
Route::post('adduser',[UserController::class, 'addUser'] );
