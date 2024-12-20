<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head title="Home" />

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'Home']) -->
        <x-navbar :page="'Home'" />
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <x-carousal />
        <x-title :sub="'Meet our'" :title="'Premium User'" />
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 px-10 mb-10">
            @foreach($users as $user)
            <x-user-card :user=$user />

            @endforeach
        </div>

        <x-footer />
    </div>

</body>

</html>