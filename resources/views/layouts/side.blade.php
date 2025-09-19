<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-900 w-64 p-5">
    <h2 class="text-white text-2xl font-bold mb-8">MyApp</h2>

    <nav class="flex flex-col space-y-4">
        {{-- Dashboar  --}}
        <a href="{{ route('dashboard.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-lg">
            Dashboard
        </a>
        <!-- Categories Dropdown -->
        <div x-data="{ open: false }" class="space-y-2">
            <button 
                @click="open = !open" 
                class="w-full flex justify-between items-center text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-lg transition">
                <span>Categories</span>
                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown Items -->
            <div x-show="open" class="pl-6 flex flex-col space-y-2">
                @foreach($categories as $category)
                    <a href="{{ route('categories.show', $category->id) }}" 
                       class="text-gray-400 hover:text-white hover:bg-gray-700 px-3 py-1 rounded-lg">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Products -->
        <a href="{{ route('products.index') }}" 
           class="text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-lg">Products</a>

        <!-- About -->
        <a href="#" 
           class="text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2 rounded-lg">About</a>
    </nav>
    </div>


        <!-- Main Content -->
        <div class="flex-1 p-6 overflow-y-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>
