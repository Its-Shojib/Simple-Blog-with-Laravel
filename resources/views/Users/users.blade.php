<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/logo.jpg') }}">
    <title>Simple Blog | Users</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- <h1>{{URL::current()}}
                {{URL::full()}}
                {{URL::previous()}}
                {{url()->current()}}
                {{url()->full()}}
            </h1> -->
        <!-- @include('components.navbar', ['page'=> 'Users']) -->
        <x-navbar :page="'Users'" />

        <!--Search function -->
        <div class="max-w-6xl mx-auto mt-8 justify-center items-center flex gap-0">
            <form action="search" method="get">
                @csrf
                <input type="text" id="searchInput" name="search" placeholder="Search by name" class="p-3 rounded-md outline-none" value="{{@$search}}">
                <button class="bg-orange-700 text-white p-3 rounded-md" type="submit" id="searchButton">Search</button>
            </form>
        </div>

        <div class="max-w-6xl mx-auto mt-8 h-[450px]">
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
                                <a href="{{ url('/user/' . $user->id . '/edit') }}" class="bg-blue-800 text-white rounded-md px-3 py-1">Edit</a>
                                <form action="{{ url('/user/' . $user->id. '/delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-800 text-white rounded-md px-3 py-1">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="max-w-6xl mx-auto mt-10 flex justify-center">
            {{ $users->links() }}
        </div>
    </div>
</body>

</html>