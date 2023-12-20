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
        <form method="POST" action="{{ route('product.edit', ['id' => $productEdit->id]) }}">
            @csrf

            <div class="row mb-3">
                <label for="product_name" class="col-md-4 col-form-label text-md-end">{{ __('Product Name') }}</label>

                <div class="col-md-6">

                    <input id="product_name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="product_name" value="{{ $productEdit->$product_name }}" required autocomplete="product_name" autofocus>

                </div>
            </div>

            <div class="row mb-3">
                <label for="product_desc" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">
                    <input id="product_desc" type="text" class="form-control" name="product_desc"  value="{{ $productEdit->$product_desc }}" required
                        autocomplete="product_desc">
                </div>
            </div>

            <div class="row mb-3">
                <label for="product_image" class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>
                <div class="col-md-6">
                    <input id="product_image" type="file" class="form-control @error('image') is-invalid @enderror"
                        name="product_image" value="{{ $productEdit->$product_image }}" required accept="image/*">
                    @error('product_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                <div class="col-md-6">
                    <input id="price" type="number" class="form-control" name="price" value="{{ $productEdit->$price }}" required autocomplete="price">
                </div>
            </div>

            <div class="row mb-3">
                <label for="color" class="col-md-4 col-form-label text-md-end">{{ __('Color') }}</label>

                <div class="col-md-6">
                    <input id="color" type="text" class="form-control" name="color"  value="{{ $productEdit->$color }} required autocomplete="color">
                </div>
            </div>

            <div class="row mb-3">
                <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                <div class="col-md-6">
                    <select name="category" id="category" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary text-black">
                        {{ __('Edit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
