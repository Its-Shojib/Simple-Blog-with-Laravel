<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/logo.jpg') }}">
    <title>Simple Blog | New User</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'Home']) -->
        <x-navbar :page="'Add-New-User'" />
        <x-title :sub="'need more?'" title="Add New User" />
        <div class="flex justify-center items-center w-10/12 mx-auto my-10">
            <div class="flex-1">
                <img src="{{ asset('build/assets/new-user.png') }}" alt="">
            </div>
            <div class="flex-1">
                <div class=" flex-col lg:flex-row-reverse">
                    <div class="card bg-gray-400 w-full max-w-xs shrink-0 shadow-2xl">
                        <h1 class="text-3xl text-center font-bold pt-5">Add New User</h1>
                        <form class="card-body" action="adduser" method="post">
                            @csrf
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Name</span>
                                </label>
                                <input type="text" name="name" value="{{old('name')}}"
                                    placeholder="Enter User's Name" class="input input-bordered" />
                                <span>@error('name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Email</span>
                                </label>
                                <input type="email" name="email" value="{{old('email')}}"
                                    placeholder="Enter Email Address" class="input input-bordered" required />
                                <span>@error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Age</span>
                                </label>
                                <input type="number" name="age" value="{{old('age')}}"
                                    placeholder="Enter User's Age" class="input input-bordered" required />
                                <span>@error('age'){{$message}}@enderror</span>
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Phone Number</span>
                                </label>
                                <input type="number" name="phone" value="{{old('phone')}}"
                                    placeholder="Enter Phone Number" class="input input-bordered" required />
                                <span>@error('phone'){{$message}}@enderror</span>
                            </div>
                            <div class="form-control mt-6">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <x-footer />
    </div>

</body>

</html>