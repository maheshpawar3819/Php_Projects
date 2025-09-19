@extends('layouts.side')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add Product</h1>

    <form action="{{route('products.store')}}" method="POST" class="space-y-4">
        @csrf
        @method('POST')
        <div>
            <label for="" class="block font-semibold">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="w-full border px-3 py-2 rounded">
            @error('name')
                <div class="text-red-600 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="" class="block font-semibold">Price</label>
            <input type="number" step="0.01" name="price" value="{{old('price')}}" class="w-full border px-3 py-2 rounded">
            @error('price')
                <div class="text-red-600 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="" class="block font-semibold">Category</label>
            <select name="category_id" class="w-full border px-3 py-2 rounded">
                <option value="">--Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">
                        {{old('category_id')==$category->id ? 'selected' : ''}}
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-red-600 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Save
        </button>
        <a href="{{route('products.index')}}" class="ml-2 text-gray-600">Cancel</a>
    </form>
@endsection