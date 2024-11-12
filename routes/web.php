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
Route::post('adduser', [UserController::class, 'addUser']);

//Routing group in prefix
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', function () {
        return view('Admin/dashboard');
    });
    Route::get('/edituser/{id}', [UserController::class, 'editUser']);
    Route::post('updateuser/{id}', [UserController::class, 'updateUser']);
    Route::delete('deleteuser/{id}', [UserController::class, 'deleteUser']);
});

//This will also work as a prefix
Route::prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'getUsers']);
    Route::post('/adduser', [UserController::class, 'addUser']);
});

//Route group with controller
Route::controller(UserController::class)->group(function () {
    Route::get('/edituser/{id}', 'editUser')->name('edit');
    Route::post('/updateuser/{id}', 'updateUser');
    Route::delete('/deleteuser/{id}', 'deleteUser');
});
