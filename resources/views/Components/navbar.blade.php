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
                <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">

                    <li><a href="/" class="{{ $page == 'Home' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Home</a></li>

                    <li><a href="/addnewuser" class="{{ $page == 'Add-New-User' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">New User</a></li>

                    <li><a href="/about" class="{{ $page == 'About' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">About</a></li>

                    <li><a href="{{route('ct')}}" class="{{ $page == 'Contract' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Contract</a></li>

                    <li><a href="/users" class="{{ $page == 'Users' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Users</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl">Simple Blog</a>
        </div>
        @if(session('user_id'))
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a href="/" class="{{ $page == 'Home' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Home</a></li>

                <li><a href="/addnewuser" class="{{ $page == 'Add-New-User' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">New User</a></li>

                <li><a href="/about" class="{{ $page == 'About' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">About</a></li>

                <li><a href="/contract" class="{{ $page == 'Contract' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Contract</a></li>

                <li><a href="/users" class="{{ $page == 'Users' ? 'bg-gray-900 rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}">Users</a></li>
            </ul>
        </div>
        @endif
        <div class="navbar-end">
            @if(session('user_id'))
            <a href="/logout" class="bg-fuchsia-950 text-white px-4 py-2 rounded-md">Logout</a>
            @else
            <a href="/login" class="bg-fuchsia-950 text-white px-4 py-2 rounded-md">Login</a>
            @endif
        </div>
    </div>
</header>