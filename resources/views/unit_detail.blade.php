@extends('layouts.template')

{{-- @section('link')
    <link rel="stylesheet" href="resources/css/template.css">
@endsection --}}

@section('content')
    <div class="flex justify-center items-center mt-60 mb-40">

        <div class="flex flex-col gap-5 items-center">

            <h1 class="text-8xl font-semi-bold">{{ $unit['unit_name'] }}</h1>

            <p class="text-2xl">Description: {{ $unit['unit_desc'] }}</p>

            <table>

                <td class="">

                    <p class="text-2xl mr-2">Image:</p>

                </td>

                <td>

                    <img src="{{ asset('storage/' . $unit->unit_image) }}" alt="{{ $unit->unit_name }}"
                        class="w-40 h-auto mb-2 mx-auto ml-2">

                </td>

            </table>

            <p class="text-2xl">Price: {{ $unit['price'] }}</p>

        </div>

    </div>
@endsection
