@extends('layouts.side')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Categories</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {
                    {
                        session('success')
                    }
                }
            </div>
        @endif

        <a href="{{route('categories.create')}}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            + Add Category
        </a>

        <table class="w-full mt-4 border">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-2">Id</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr class="border-t">
                        <td class="p-2">{{$category->id}}</td>
                        <td class="p-2">{{$category->name}}</td>
                        <td class="p-2 space-x-2">
                            <a href="{{route('categories.show',$category->id)}}" class="text-green-600">View</a>
                            <a href="{{route('categories.edit',$category->id)}}" class="text-blue-600">Edit</a>
                            <form action="{{route('categories.destroy',$category->id)}}" method="POST" class="inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="text-red-600" onclick="return confirm('Delete this category?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
   
