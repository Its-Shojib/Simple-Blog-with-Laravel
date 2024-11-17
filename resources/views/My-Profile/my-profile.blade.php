<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head title="{{$user->name}}" />

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- Navbar -->
        <x-navbar :page="'Profile'" />
        <x-title :sub="'about me?'" title="My Profile" />

        <!-- Profile Section -->
         <x-profile-card :user="$user"/>

        <!-- Footer -->
        <x-footer />
    </div>

</body>

</html>