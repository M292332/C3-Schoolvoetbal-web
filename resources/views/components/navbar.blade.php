<div class="container">
    <h1>FootyGokken</h1>
    <nav>
            <li class="dropdown">
                <a href="#" class="hover:text-blue-300 transition">Opties</a>
                <div class="dropdown-content">
                    <a href="/" class="dropdown-item">Home</a>
                    <a href="/" class="dropdown-item">Wedstrijden</a>
                    <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                    <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                        @csrf
                        <button type="submit" class="w-full">Logout</button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</div>


{{-- <nav class="flex flex-col text-center md:text-left">
    <h2 class="text-xl font-semibold text-blue-300 mb-4">Navigatie</h2>
    <ul class="space-y-2">
        <li><a href="/" class="hover:text-blue-200 transition">Home</a></li>
        <li><a href="/" class="hover:text-blue-200 transition">Wedstrijden</a></li>
        <li><a href="/" class="hover:text-blue-200 transition">Gokken</a></li>
    </ul>
</nav> --}}
