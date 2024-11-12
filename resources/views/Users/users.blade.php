<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Blog | Home</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto bg-gray-400 min-h-screen">
        <!-- <h1>{{URL::current()}}
                {{URL::full()}}
                {{URL::previous()}}
                {{url()->current()}}
                {{url()->full()}}
            </h1> -->
        <!-- @include('components.navbar', ['page'=> 'Users']) -->
        <x-navbar :page="'Users'" />

        <div class="max-w-6xl mx-auto mt-8">
            <div class="overflow-x-auto">
                <table class="table table-zebra-zebra ">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th>{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->age}}</td>
                            <td>{{$user->phone}}</td>
                            <td class="flex gap-3 text-center">
                                <a href="/" class="bg-blue-800 text-white rounded-md px-3 py-1">Edit</a>
                                <form action="/" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-800 text-white rounded-md px-3 py-1">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>