<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Schoolvoetbal' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Dropdown Styling */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-item {
            padding: 8px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-item:hover {
            background-color: #ddd;
            color: #000;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-blue-400 text-white shadow-lg py-4">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center px-4 sm:px-6">
            <h1 class="text-2xl sm:text-3xl font-bold text-center sm:text-left">
                <span>FootyGokken</span>
            </h1>
            <nav class="mt-4 sm:mt-0">



                    <li class="dropdown">
                        <a href="#" class="hover:text-blue-300 transition">opties</a>
                        <div class="dropdown-content">
                            <a href="/" class="dropdown-item">Home</a>
                            <a href="/" class="dropdown-item">Wedstrijden</a>
                            <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                                @csrf
                                <button type="submit" class="w-full text-left">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-8 px-4 sm:px-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-blue-400 text-white py-8 sm:py-12 mt-12 px-6 sm:px-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-start space-y-8 md:space-y-0">

            <div class="flex flex-col text-center md:text-left">
                <h2 class="text-xl font-semibold text-blue-300 mb-4">Contactgegevens</h2>
                <p>Email: <a href="mailto:info@zorba.nl" class="hover:underline text-blue-200">koelemail@mail.nl</a></p>
                <p>Telefoon: <a href="tel:+31123456789" class="hover:underline text-blue-200">+31 6 1234 5678</a></p>
                <p>koele locatie, koelere locatie 69 1234 AB Breda</p>
            </div>

            <nav class="flex flex-col text-center md:text-left">
                <h2 class="text-xl font-semibold text-blue-300 mb-4">Navigatie</h2>
                <ul class="space-y-2">
                    <li><a href="/" class="hover:text-blue-200 transition">Home</a></li>
                    <li><a href="/" class="hover:text-blue-200 transition">Wedstrijden</a></li>
                    <li><a href="/" class="hover:text-blue-200 transition">Gokken</a></li>
                </ul>
            </nav>

            <div class="flex flex-col text-center md:text-left">
                <h2 class="text-xl font-semibold text-blue-300 mb-4">Volg ons</h2>
                <a href="https://facebook.com" target="_blank" class="hover:underline text-blue-200">Facebook</a>
                <a href="https://twitter.com" target="_blank" class="hover:underline text-blue-200">Twitter</a>
                <a href="https://instagram.com" target="_blank" class="hover:underline text-blue-200">Instagram</a>
            </div>
        </div>
    </footer>
</body>
</html>
