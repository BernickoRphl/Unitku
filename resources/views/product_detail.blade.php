@extends('layouts.template')

{{-- @section('link')
    <link rel="stylesheet" href="resources/css/template.css">
@endsection --}}

@section('content')
    <div class="flex justify-center items-center mt-60 mb-40">

        <div class="flex flex-col gap-5 items-center">

            <h1 class="text-8xl font-semi-bold">{{ $product['product_name'] }}</h1>

            <p class="text-2xl">Description: {{ $product['product_desc'] }}</p>

            <table>

                <td class="">

                    <p class="text-2xl mr-2">Image:</p>

                </td>

                <td>

                    <img src="{{ asset('storage/' . $product->product_image) }}" alt="{{ $product->product_name }}"
                        class="w-40 h-auto mb-2 mx-auto ml-2">

                </td>

            </table>

            <p class="text-2xl">Price: {{ $product['price'] }}</p>

            <p class="text-2xl">Color: {{ $product['color'] }}</p>

        </div>

    </div>
@endsection
