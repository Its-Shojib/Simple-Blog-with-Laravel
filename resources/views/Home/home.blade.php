<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/logo.jpg') }}">


    <title>Simple Blog | Home</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'Home']) -->
        <x-navbar :page="'Home'" />
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <!-- <main class="flex justify-center items-center">
            <h1 class="text-center font-bold text-2xl">Hello! I am Home.</h1>
            
        </main> -->
        <x-carousal />
        <x-title :sub="'Need User?'" :title="'Premium User'" />
        <x-footer />
    </div>

</body>

</html>