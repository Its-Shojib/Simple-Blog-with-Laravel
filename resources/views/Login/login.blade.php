<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('build/assets/logo.jpg') }}">
    <title>Simple Blog | Login</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="w-full mx-auto bg-gray-100 min-h-screen">
        <!-- @include('components.navbar', ['page'=> 'Home']) -->
        <x-navbar :page="'Login'" />
        <main class="flex justify-center items-center mt-20">
            <div class="hero">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="card bg-gray-400 w-full max-w-lg shrink-0 shadow-2xl">
                        <h1 class="text-3xl text-center font-bold pt-5">Login</h1>
                        <form class="card-body" action="login" method="post">
                            @csrf
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
                                    <span class="label-text">Password</span>
                                </label>
                                <input type="password" name="password"
                                    placeholder="Enter Password" class="input input-bordered" required />
                                <span>@error('password'){{$message}}@enderror</span>
                            </div>
                            <div class="form-control mt-6">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>