<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/logo.jpg') }}">
    <title>Simple Blog | Contract</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'Contract']) -->
        <x-navbar :page="'Contract'" />
        <main class="flex justify-center items-center">
            <h1 class="text-center font-bold text-2xl">Hello! I am Contract.</h1>
        </main>
    </div>

</body>

</html>