<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//import Middleware
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\userCheck;



Route::get('/about', function () {
    return view('About/about');
});
//This will work
// Route::get('/contract', function () {
//     return view('Contract/contract');
// });

//This will also work


//Routing group in prefix
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/dashboard', function () {
//         return view('Admin/dashboard');
//     });
//     Route::get('/edituser/{id}', [UserController::class, 'editUser']);
//     Route::post('updateuser/{id}', [UserController::class, 'updateUser']);
//     Route::delete('deleteuser/{id}', [UserController::class, 'deleteUser']);
// });

//This will also work as a prefix
// Route::prefix('admin')->group(function () {
//     Route::get('/users', [UserController::class, 'getUsers']);
//     Route::post('/adduser', [UserController::class, 'addUser']);
// });

//Route group with controller
// Route::controller(UserController::class)->group(function () {
//     Route::get('/edituser/{id}', 'editUser')->name('edit');
//     Route::post('/updateuser/{id}', 'updateUser');
//     Route::delete('/deleteuser/{id}', 'deleteUser');
// });

//group middleware
// Route::middleware(['check-1'])->group(function () {
//     Route::get('/users', [UserController::class, 'getUser']);
// });

//Route single Middleware
// Route::view('hello', 'hello')->middleware([AgeCheck::class, userCheck::class]);
Route::get('hello', [UserController::class, 'fetchUser']);


//Login Route
Route::view('/login', 'Login/login');
Route::post('/login', [UserController::class, 'login']);

//Private Route
Route::middleware(['Auth'])->group(function () {
    Route::view('/', 'Home/home');
    Route::view('/addnewuser', 'AddNewUser/addnewuser');
    Route::get('/users', [UserController::class, 'getUser']);
    Route::view('/about',  'About/about');
    Route::view('/contract', 'Contract/contract')->name('ct');
    Route::get('/users', [UserController::class, 'getUser']);
    Route::post('/adduser', [UserController::class, 'addUser']);
    //Logout
    Route::get('/logout', [UserController::class, 'logout']);
});
