@extends('layouts.side')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Category</h1>

    <form action="{{route('categories.update',$category->id)}}" method="POST" class="space-y-4">
        @csrf
        @method("PUT")

        <div>
            <label for="" class="block font-semibold">Name</label>
            <input type="text" name="name" value="{{old('name',$category->name)}}" class="w-full border px-3 py-2 rounded">
            
            @error('name')
                <div class="text-red-600 text-sm">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update
        </button>
        <a href="{{route('categories.index')}}" class="ml-2 text-gray-600">Cancel</a>
    </form>
@endsection