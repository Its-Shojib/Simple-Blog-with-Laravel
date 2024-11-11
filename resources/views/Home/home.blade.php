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
        <!-- @include('components.navbar', ['page'=> 'Home']) -->
        <x-navbar :page="'Home'" />
        <main class="flex justify-center items-center">
            <div class="hero">
                <div class="hero-content flex-col lg:flex-row-reverse">
                    <div class="card bg-base-200 w-full max-w-lg shrink-0 shadow-2xl">
                        <h1 class="text-3xl text-center font-bold pt-5">Add New User</h1>
                        <form class="card-body" action="adduser" method="post">
                            @csrf
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Name</span>
                                </label>
                                <input type="text" name="name" 
                                placeholder="Enter User's Name" class="input input-bordered" required />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Email</span>
                                </label>
                                <input type="email" name="email"
                                 placeholder="Enter Email Address" class="input input-bordered" required />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Age</span>
                                </label>
                                <input type="number" name="age"
                                placeholder="Enter User's Age" class="input input-bordered" required />
                            </div>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Phone Number</span>
                                </label>
                                <input type="number" name="phone"
                                placeholder="Enter Phone Number" class="input input-bordered" required />
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