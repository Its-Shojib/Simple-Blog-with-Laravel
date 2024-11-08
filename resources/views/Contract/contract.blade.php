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
    <div class="container mx-auto bg-gray-400">
        <header>
            <div class="navbar bg-cyan-900 text-white">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </div>
                        <ul
                            tabindex="0"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contract">Contract</a></li>
                            <li><a href="/users">Users</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-ghost text-xl">Simple Blog</a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contract">Contract</a></li>
                        <li><a href="/users">Users</a></li>
                    </ul>
                </div>
                <div class="navbar-end">
                <a class="bg-fuchsia-950 text-white px-4 py-2 rounded-md">Login</a>
                </div>
            </div>
        </header>
        <main class="flex justify-center items-center min-h-screen">
            <h1 class="text-center text-3xl font-bold">Hello! I am Simple Blog Contract Page!</h1>
        </main>
    </div>
</body>

</html>