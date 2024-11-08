<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        // Fetch data from the database
        // Return the data as JSON
        // Example:
        return view('users');
    }
}
