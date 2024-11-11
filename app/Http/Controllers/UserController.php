<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser()
    {
        // Fetch data from the database
        $users = ["Masum Billah", "Joydip Das", "Md Shojib Hossain"];
        return view('Users.users', ["users" => $users]);
    }

    function addUser(Request $request)
    {
        
        // Store the user data in the database
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');
        $phone = $request->input('phone');
        echo " $name, $email, $age, $phone";
        // Validate the input data
        // Store the user data in the database
        // Example:
        // User::create(["name"=>$name, "email"=>$email]);
        // return redirect('/users')->with('success', 'User added successfully');
        return "Form Submitted";
    }
}
