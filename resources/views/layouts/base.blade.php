<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link naar de css --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}">
    {{-- ieder bestand heeft zijn eigen titel --}}
    <title>@yield('title')</title>
    {{-- roep vite aan om automatisch de javascript en de css te vinden --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-blue-400 text-black shadow-lg py-4">
        <x-navbar/>
    </header>

    <!-- Main Content -->
    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-blue-400 text-black py-8 sm:py-12 mt-12 px-6 sm:px-8">
        <x-footer/>
    </footer>
</body>
</html>
