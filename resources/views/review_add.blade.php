<!-- resources/views/reviews/create.blade.php -->

@extends('layouts.template')

@section('content')
<div class="mt-40 mb-40">

    <div class="container mx-auto mt-10 mb-10 px-16">
        <h2 class="text-2xl font-bold mb-4">Tambah Review</h2>

        <form action="{{ route('reviews.store', $pesanan) }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                <textarea id="description" name="description" rows="4" class="form-input mt-1 block w-full"></textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </div>
        </form>
    </div>
</div>
@endsection
