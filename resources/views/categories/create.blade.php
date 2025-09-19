@extends('layouts.side')

    @section('content')
        <h1 class="text-2xl font-bold mb-4">Add category</h1>

        <form action="{{route('categories.store')}}" method="POST">
            @csrf
            @method('POST')
            <div>
                <label for="" class="block font-semibold">Name</label>
                <input type="text" name="name" value="{{old('name')}}" class="w-full border px-3 py-2 rounded">
                @error('name')
                    <div>
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 rounded hover:bg-blue-600">
                Save
            </button>

            <a href="{{route('categories.index')}}" class="ml-2 text-gray-600">Cancel</a>
        </form>
    @endsection