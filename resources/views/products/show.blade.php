@extends('layouts.side')

@section('content')
<h1 class="text-2xl font-bold mb-4">Product Details</h1>

<div class="border p-4 rounded bg-white">
<p><strong>ID:</strong>{{$product -> id}}</p>
<p><strong>Name:</strong>{{$product -> name}}</p>
<p><strong>Price:</strong>Rs{{number_format($product -> price,2)}}</p>
<p><strong>Category:</strong>{{$product -> category -> name ?? 'N/A'}}</p>

<a href="{{ route('products.index') }}" class="mt-4 inline-block text-blue-600">← Back to Products</a>
</div>