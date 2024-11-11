<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Simple Blog | Contract</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container mx-auto bg-gray-400 min-h-screen">
    <!-- @include('components.navbar', ['page'=> 'Contract']) -->
    <x-navbar :page="'Contract'" />

    </div>
</body>

</html>