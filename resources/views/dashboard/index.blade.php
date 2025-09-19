@extends('layouts.side')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Categories Card -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
            <p class="text-lg font-semibold text-gray-600">Total Categories</p>
            <p class="text-3xl font-bold text-green-600 mt-2">{{ $totalCategories }}</p>
        </div>

        <!-- Products Card -->
        <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
            <p class="text-lg font-semibold text-gray-600">Total Products</p>
            <p class="text-3xl font-bold text-blue-600 mt-2">{{ $totalProducts }}</p>
        </div>
    </div>
@endsection
