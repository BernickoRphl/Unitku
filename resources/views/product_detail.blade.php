@extends('layouts.template')

{{-- @section('link')
    <link rel="stylesheet" href="resources/css/template.css">
@endsection --}}

@section('content')
    <h1>Product Details</h1>
    <div class= "mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $product['product_name'] }}</h1>
        <p>Description: {{ $product['product_desc'] }} </p>
        <p>Image: {{ asset('storage/' . $product->product_image) }} </p>
        <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="w-40 h-auto">
        <p>Price: {{ $product['price'] }} </p>
        <p>Color: {{ $product['color'] }} </p>
    </div>
@endsection
