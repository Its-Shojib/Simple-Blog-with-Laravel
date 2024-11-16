<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/logo.jpg') }}">

    <title>Simple Blog | {{$user->name}}</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- Navbar -->
        <x-navbar />
        <x-title :sub="'know user?'" title="User Details" />

        <!-- Profile Section -->
        <div class="flex justify-center items-center pt-16 pb-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
                <div>
                    <img width="500" height="500" src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" alt="User Avatar" >
                </div>

                <div class="text-center mb-8">
                    <h1 class="text-3xl font-semibold text-gray-800">{{$user->name}}</h1>
                </div>

                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium">ID:</span>
                        <span class="text-gray-800">{{$user->id}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium">Age:</span>
                        <span class="text-gray-800">{{$user->age}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium">Phone:</span>
                        <span class="text-gray-800">{{$user->phone}}</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600 font-medium">Email:</span>
                        <span class="text-gray-800">{{$user->email}}</span>
                    </div>
                </div>

                <!-- Edit Button (Optional) -->
                <div class="mt-8 flex justify-center">
                    <a href="{{ url('/user/' . $user->id . '/edit') }}" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <x-footer />
    </div>

</body>

</html>
