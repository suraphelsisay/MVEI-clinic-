<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MVEI Clinic System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">MVEI Clinic</a>
            <div>
                <a href="/" class="px-3 py-2 rounded hover:bg-blue-700">Home</a>
                <a href="/about" class="px-3 py-2 rounded hover:bg-blue-700">About Us</a>
                <a href="/services" class="px-3 py-2 rounded hover:bg-blue-700">Services</a>
                <a href="/contact" class="px-3 py-2 rounded hover:bg-blue-700">Contact Us</a>
                <a href="/login" class="px-3 py-2 rounded hover:bg-blue-700">Login</a>
            </div>
        </div>
    </nav>

    <main class="py-8">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-800 text-white p-6 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} MVEI Clinic. All rights reserved.</p>
            <p>123 Clinic Street, Health City, Country</p>
        </div>
    </footer>
</body>
</html>