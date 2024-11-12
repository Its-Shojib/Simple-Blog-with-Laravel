<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function getUser()
    {
        // $users = DB::select('select * from users');
        // $users = DB::table("users");
        $users = \App\Models\User::all();
        return view('Users.users', ['users' => $users]);
    }
 
    function addUser(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|max:50|min:3',
            'email' => 'required|email|unique:users',
            'age' => 'required|integer',
            'phone' => 'required|digits:11'
        ]);

        // Store the user data in the database
        $name = $request->input('name');
        $email = $request->input('email');
        $age = $request->input('age');
        $phone = $request->input('phone');
        echo " $name, $email, $age, $phone";


        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'age' => $age,
            'phone' => $phone
        ]);

        return redirect('/users')->with('success', 'User added successfully!');

        // return redirect()->back()->with('success', 'User added successfully');

    }

    function fetchUser(){
        // Fetch all users from the http
        // and return them as a JSON response
        $res = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $res->body();
        return view('/hello',['users'=> json_decode($users)]);

        
    }
}
