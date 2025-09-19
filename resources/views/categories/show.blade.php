@extends('layouts.side')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Category Details</h1>
    <div class="border p-4 rounded bg-white">
        <p><strong>ID:</strong>{{$category->id}}</p>
        <p><strong>Name:</strong>{{$category->name}}</p>
    </div>

    <a href="{{route('categories.index')}}" class="mt-4 inline-block text-blue-600">Back to categories</a>
@endsection