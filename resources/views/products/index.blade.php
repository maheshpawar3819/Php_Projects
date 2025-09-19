@extends('layouts.side')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Products</h1>
    
    @if (session('success'))
        {{
            session('success')
        }}
    @endif

    <a href="{{route('products.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            + Add Product
    </a>

    <table class="w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200 text-left">
                        <th class="p-2">Id</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Category</th>
                        <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="border-t">
                        <td class="p-2">{{$product -> id}}</td>
                        <td class="p-2">{{$product ->name}}</td>
                        <td class="p-2">Rs{{number_format($product->price,2)}}</td>
                        <td class="p-2">{{$product->category->name ?? 'N/A'}}</td>
                        <td class="p-2 space-x-2">
                            <a href="{{route('products.show',$product->id)}}" class="text-green-600">
                                View
                            </a>
                            <a href="{{route('products.edit',$product->id)}}">
                                Edit 
                            </a>
                            <form action="{{route('products.destroy',$product->id)}}" method="POST" class="inline">
                                @csrf
                                @method('DELETe')
                                <button type="submit" class="text-red-600" onclick="return confirm('Delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection