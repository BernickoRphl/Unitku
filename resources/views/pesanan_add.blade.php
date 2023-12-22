@extends('layouts.template')

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection

@section('content')

<style>
    #products {
        width: 100%;
    }
</style>

    <div class="mt-40 mb-40">
        <form method="POST" action="{{ route('pesanan.add') }}">
            @csrf

            <div class="row mb-3">
                <label for="tanggal_pemesanan"
                    class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Pemesanan') }}</label>
                <div class="col-md-6">
                    <input id="tanggal_pemesanan" type="date" class="form-control" name="tanggal_pemesanan"
                        value="{{ $currentDate }}" required>
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
                    <!-- Use the Select2 library for an enhanced dropdown -->
                    <select name="products" id="products" multiple required>
                        @foreach ($product as $pro)
                            <option value="{{ $pro->id }}" data-image="{{ asset('storage/' . $pro->product_image) }}">
                                {{ $pro->product_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <script>
                // JQUERY
                $(document).ready(function() {
                    $('#products').select2({
                        templateResult: formatProduct,
                        escapeMarkup: function(m) {
                            return m;
                        }
                    });
                });

                // Custom function to format the dropdown option
                function formatProduct(product) {
                    if (!product.id) {
                        return product.text;
                    }
                    var $product = $(
                        '<span><img src="' + $(product.element).data('image') + '" class="w-10 h-auto" /> ' + product.text +
                        '</span>'
                    );
                    return $product;
                }
            </script>



            <div class="row mb-3">
                <label for="jumlah" class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>
                <div class="col-md-6">
                    <!-- Add input fields for quantities -->
                    <!-- Example: -->
                    <input id="jumlah" type="text" class="form-control" name="jumlah" required>
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
