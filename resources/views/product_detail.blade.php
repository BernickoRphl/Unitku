@extends('layouts.template')

{{-- @section('link')
    <link rel="stylesheet" href="resources/css/template.css">
@endsection --}}

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="text-center p-5 bg-primary text-white rounded">
            <h1 class="text-3xl mb-4">{{ $product['product_name'] }}</h1>
            <p class="mb-2">Description: {{ $product['product_desc'] }}</p>
            <p class="mb-2">Image:</p>
            <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}"
                class="w-40 h-auto mb-2 mx-auto">
            <p class="mb-2">Price: {{ $product['price'] }}</p>
            <p class="mb-2">Color: {{ $product['color'] }}</p>
        </div>
    </div>
@endsection
