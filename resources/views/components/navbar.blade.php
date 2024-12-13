<div class="container mx-auto flex flex-col sm:flex-row justify-between items-center px-4 sm:px-6">
    <h1 class="text-2xl sm:text-3xl font-bold text-center sm:text-left flex items-center space-x-4">
        <span>FootyGokken</span>
        <video class="w-24 md:w-32 lg:w-40 h-auto" autoplay loop muted>
            <source src="{{ asset('3.mp4') }}" type="video/mp4">
        </video>
    </h1>

    <nav class="mt-4 sm:mt-0">
        <ul class="flex space-x-4">
            <!-- Dropdown menu  -->
            <li class="dropdown">
                <a href="#" class="text-2xl sm:text-3xl font-bold text-center sm:text-left flex items-center space-x-4"">Opties</a>

                <div class="dropdown-content">
                    <a href="/" class="dropdown-item">Home</a>


                    @auth
                        <a href="{{ route('toernooien.index') }}" class="dropdown-item">Toernooien</a>
                        <a href="{{ route('teams.index') }}" class="dropdown-item">Teams</a>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">Account beheren</a>
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                            @csrf
                            <button type="submit" class="w-full text-left">Uitloggen</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    @endauth
                </div>
            </li>
        </ul>
    </nav>
</div>
