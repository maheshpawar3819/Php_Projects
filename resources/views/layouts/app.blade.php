<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'MyApp') }}</title>
    @vite('resources/css/app.css')  <!-- Tailwind -->
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white px-6 py-3 shadow-md fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-lg font-bold">MyApp</a>

            <ul class="flex space-x-6">
                <li><a href="{{ route('categories.index') }}" class="hover:text-gray-300">Categories</a></li>
                <li><a href="{{ route('products.index') }}" class="hover:text-gray-300">Products</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
