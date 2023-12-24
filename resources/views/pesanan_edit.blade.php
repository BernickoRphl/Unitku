@extends('layouts.template')

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection

@section('content')
    <div class="mt-40 mb-40">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pesanan.update', $pesananEdit) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>
                <div class="col-md-6">
                    <input id="address" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="address" value="{{ $pesananEdit->address }}" readonly autocomplete="address" autofocus>
                </div>
            </div>

            <div class="row mb-3">

                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">

                    <input id="description" type="text" class="form-control" name="description"
                        value="{{ $pesananEdit->description }}" readonly autocomplete="description">

                </div>

            </div>

            <div class="row mb-3">

                <label for="product_id" class="col-md-4 col-form-label text-md-end">Select Product</label>

                <div class="col-md-6">

                    <select name="product_id[]" id="product_id" class="form-select" multiple readonly>

                        @foreach ($product as $product)
                            <option value="{{ $product->id }}" selected>{{ $product->name }}</option>
                        @endforeach

                    </select>

                </div>

            </div>

            <script>
                $(document).ready(function() {
                    $('#product_id').select2({
                        templateResult: formatProduct,
                        escapeMarkup: function(m) {
                            return m;
                        }
                    });
                });

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

                    <input id="jumlah" type="text" class="form-control" name="jumlah"
                        value="{{ $pesananEdit->jumlah }}" readonly autocomplete="jumlah">

                </div>

            </div>

            <div class="row mb-3">

                <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">

                    <select name="status" id="status" required>

                        @foreach ($status as $stats)
                            @if ($pesananEdit->status_id === $stats->id)
                                <option value="{{ $stats->id }}" selected>{{ $stats->name }}</option>
                            @else
                                <option value="{{ $stats->id }}">{{ $stats->name }}</option>
                            @endif
                        @endforeach

                    </select>

                </div>

            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary text-black">
                        {{ __('Update Pesanan') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Your existing script remains unchanged
    </script>
@endsection
