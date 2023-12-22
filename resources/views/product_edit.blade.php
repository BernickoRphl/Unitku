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

        <form method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">

                <label for="product_name" class="col-md-4 col-form-label text-md-end">{{ __('Product Name') }}</label>

                <div class="col-md-6">

                    <input id="product_name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="product_name" value="{{ $productEdit->product_name }}" required autocomplete="product_name"
                        autofocus>

                </div>

            </div>

            <div class="row mb-3">

                <label for="product_desc" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">

                    <input id="product_desc" type="text" class="form-control" name="product_desc"
                        value="{{ $productEdit->product_desc }}" required autocomplete="product_desc">

                </div>

            </div>

            <div class="row mb-3">

                <label for="product_image" class="col-md-4 col-form-label text-md-end">{{ __('Update Image') }}</label>

                <div class="col-md-6">

                    <input id="product_image" type="file" class="form-control @error('image') is-invalid @enderror"
                        name="product_image" required accept="image/*">

                    @error('product_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

            </div>

            <div class="row mb-3 flex justify-center items-center">

                <img id="imagePreview"
                    src="{{ $productEdit->product_image ? asset('storage/' . $productEdit->product_image) : '#' }}"
                    alt="{{ $productEdit->product_name }}"
                    class="w-80 h-auto @if (!$productEdit->product_image) hidden @endif">

            </div>

            <div class="row mb-3">

                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                <div class="col-md-6">

                    <input id="price" type="text" class="form-control" name="price"
                        value="{{ $productEdit->price }}" required autocomplete="price">

                </div>

            </div>

            <div class="row mb-3">

                <label for="color" class="col-md-4 col-form-label text-md-end">{{ __('Color') }}</label>

                <div class="col-md-6">

                    <input id="color" type="text" class="form-control" name="color"
                        value="{{ $productEdit->color }}" required autocomplete="color">

                </div>

            </div>

            <div class="row mb-3">

                <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                <div class="col-md-6">

                    <select name="category" id="category" required>

                        @foreach ($categories as $category)
                            @if (old('$category->id', $productEdit->category_id) === $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach

                    </select>

                </div>

            </div>

            <div class="row mb-0">

                <div class="col-md-6 offset-md-4">

                    <button type="submit" class="btn btn-primary text-black">
                        {{ __('Add Product') }}
                    </button>

                </div>

            </div>

        </form>

    </div>

    <script>
        // FORMATER PRICE
        function formatCurrency(input) {
            let numericValue = input.value.replace(/[^0-9.]/g, '');

            numericValue = numericValue.replace(/,/g, '');

            let floatValue = parseFloat(numericValue);

            if (isNaN(floatValue)) {
                floatValue = 0;
            }

            input.value = floatValue.toLocaleString('en-US');
        }

        document.getElementById('price').addEventListener('input', function() {
            formatCurrency(this);
        });

        // Tambahkan fungsi untuk menampilkan pratinjau gambar
        document.getElementById('product_image').addEventListener('change', function(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            };

            // Membaca file gambar yang dipilih
            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endsection
