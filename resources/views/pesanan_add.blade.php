@extends('layouts.template')

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection

@section('content')
    <div class="mt-40 mb-40">
        <form method="POST" action="{{ route('pesanan.add') }}">
            @csrf

            <div class="row mb-3">
                <label for="tanggal_pemesanan" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Pemesanan') }}</label>
                <div class="col-md-6">
                    <input id="tanggal_pemesanan" type="date" class="form-control" name="tanggal_pemesanan" value="{{ $currentDate }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                <div class="col-md-6">
                    <textarea id="description" class="form-control" name="description" required></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="products" class="col-md-4 col-form-label text-md-end">{{ __('Products') }}</label>
                <div class="col-md-6">
                    <!-- Add a dropdown or other input for selecting products -->
                    <!-- Example: -->
                    <select name="products[]" id="products" multiple required>
                        @foreach ($product as $pro)
                            <option value="{{ $pro->id }}">{{ $pro->product_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="quantities" class="col-md-4 col-form-label text-md-end">{{ __('Quantities') }}</label>
                <div class="col-md-6">
                    <!-- Add input fields for quantities -->
                    <!-- Example: -->
                    <input id="quantities" type="text" class="form-control" name="quantities" required>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary text-black">
                        {{ __('Add Pesanan') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
