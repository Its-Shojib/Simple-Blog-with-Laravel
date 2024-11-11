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
        // Validate the input data
        $request->validate([
            'name' => 'required|max:50|min:3',
            'email' => 'required|email|unique:users',
            'age' => 'required|integer',
            'phone' => 'required|digits:11'
        ],[
            'name.required' => 'Name is required.',
            'name.max' => 'Name should not exceed 50 characters.',
            'name.min' => 'Name should be at least 3 characters long.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email already exists.',
            'age.required' => 'Age is required.',
            'age.integer' => 'Age must be an integer.',
            'phone.required' => 'Phone number is required.',
            'phone.digits' => 'Phone number should be 11 digits long.'
        ]);

        // Store the user data in the database
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');
        $phone = $request->input('phone');
        echo " $name, $email, $age, $phone";

        // Example:
        // User::create(["name"=>$name, "email"=>$email]);
        // return redirect('/users')->with('success', 'User added successfully');
        return "Form Submitted";
    }
}
