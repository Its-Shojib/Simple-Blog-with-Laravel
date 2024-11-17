<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head title="{{$user->name}}"/>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- Navbar -->
        <x-navbar />
        <x-title :sub="'know user?'" title="User Details" />

        <x-profile-card :user="$user"/>

        <!-- Footer -->
        <x-footer />
    </div>

</body>

</html>
