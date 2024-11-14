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
        // $users = DB::table("users")->get();
        // $users = DB::table("users")->where('name','Md Shojib Hossain')->get();

        //first item
        // $firstUser = DB::table("users")->first();

        //count
        // $countUsers = DB::table("users")->count();

        //delete
        // DB::table('users')->where('id', 1)->delete();

        //update
        // DB::table('users')->where('id', 1)->update(['name' => 'John Doe']);

        //Get user by condition
        // $users = DB::table("users")
        //     ->where('name', 'LIKE', '%John%')
        //     ->orWhere('age', '>', 25)
        //     ->get();
        // dd($users);



        //Model Queries
        // $users = \App\Models\User::where('name', 'LIKE', '%John%')->get();
        // $users = \App\Models\User::where('name', 'LIKE', '%shojib%')->orWhere('age', '>', 26)->get();
        
        // $users = \App\Models\User::where('name', 'LIKE', '%John%')->orWhere('age', '>', 25)->get();
        // $users = \App\Models\User::where('name', 'LIKE', '%John%')->orWhere('age', '>', 25)->get();
        // $users = \App\Models\User::all();
        
        $users = \App\Models\User::paginate(8);
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

    function fetchUser()
    {
        // Fetch all users from the http
        // and return them as a JSON response
        $res = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $res->body();
        return view('/hello', ['users' => json_decode($users)]);
    }

    function login(Request $request)
    {
        // Validate the input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Check if user exists
        $user = \App\Models\User::where('email', $request->email)->first();
        if ($user && $request->password === $user->phone) {
            // Login successful
            $request->session()->put('user_id', $user->id);
            return redirect('/')->with('success', 'Login successful!');
        }else{
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
    function logout()
    {
        // Remove the user's ID from the session
        session()->forget('user_id');
        return redirect('/users')->with('success', 'Logged out successfully!');
    }

    function editUser($id)
    {
        $user = \App\Models\User::find($id);
        return view('EditUser.edituser', ['user' => $user]);
    }
    function updateUser(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|max:50|min:3',
            'email' => 'required|email',
            'age' => 'required|integer',
            'phone' => 'required|digits:11'
        ]);

        // Update the user data in the database
        $user = \App\Models\User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->age = $request->input('age');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect('/users')->with('success', 'User updated successfully!');
    }
    function deleteUser($id)
    {
        // Delete the user from the database
        \App\Models\User::destroy($id);
        return redirect('/users')->with('success', 'User deleted successfully!');
    }

    function searchUser(Request $request)
    {
        $search = $request->input('search');
        $users = \App\Models\User::where('name', 'LIKE', '%' . $search . '%')->paginate(8);
        return view('Users.users', ['users' => $users, 'search' => $search]);
    }

    function viewUser($id){
        $user = \App\Models\User::find($id);
        return view('Profile.profile', ['user' => $user]);
    }
}
