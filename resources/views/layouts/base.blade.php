<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-blue-400 text-white shadow-lg py-4">
        <x-navbar/>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-8 px-4 sm:px-6">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-blue-400 text-white py-8 sm:py-12 mt-12 px-6 sm:px-8">
        <x-footer/>
    </footer>
</body>
</html>
