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

        <div class="max-w-md mt-8">

            @for($i = 0; $i < count($users); $i++)
                <p>Hello I am {{ $users[$i]->name }} <br></p> 
                <p>My email is:  {{ $users[$i]->email }} <br></p> 
                <!-- Replace 'name' with the actual column you want to display -->
                @endfor
        </div>
    </div>
</body>

</html>