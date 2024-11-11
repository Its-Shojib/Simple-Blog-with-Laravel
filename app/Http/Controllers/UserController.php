<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        // Fetch data from the database
        $users = ["Masum Billah", "Joydip Das", "Md Shojib Hossain"];
        return view('Users.users',["users"=>$users]);
    }
}
