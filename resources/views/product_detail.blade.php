@extends('layouts.app')

@section('content')
<h1>Product Detail</h1>
    <div class= "mt-4 p-5 bg-primary text-white rounded">
    <h1>{{ $product['product_name']}}</h1>
    <p>Description: {{ $product['product_desc']}} </p>
    <p>Image: {{ $product['product_image']}} </p>
    <p>Price: {{ $product['price']}} </p>
    <p>Color: {{ $product['color']}} </p>
    </div>
@endsection
