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

        <form method="POST" action="{{ route('unit.update', $unitEdit) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="unit_name" class="col-md-4 col-form-label text-md-end">{{ __('Unit Name') }}</label>
                <div class="col-md-6">
                    <input id="unit_name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="unit_name" value="{{ $unitEdit->unit_name }}" required autocomplete="unit_name"
                        autofocus>
                </div>
            </div>

            <div class="row mb-3">
                <label for="unit_desc" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                <div class="col-md-6">
                    <input id="unit_desc" type="text" class="form-control" name="unit_desc"
                        value="{{ $unitEdit->unit_desc }}" required autocomplete="unit_desc">
                </div>
            </div>

            <div class="row mb-3">
                <label for="unit_image" class="col-md-4 col-form-label text-md-end">{{ __('Update Image') }}</label>
                <div class="col-md-6">
                    <input id="unit_image" type="file" class="form-control @error('image') is-invalid @enderror"
                        name="unit_image" required accept="image/*">

                    @error('unit_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 flex justify-center items-center">
                <img id="imagePreview"
                    src="{{ $unitEdit->unit_image ? asset('storage/' . $unitEdit->unit_image) : '#' }}"
                    alt="{{ $unitEdit->unit_name }}"
                    class="w-80 h-auto @if (!$unitEdit->unit_image) hidden @endif">
                <input type="hidden" id="oldImage" name="oldImage" value="{{ $unitEdit->unit_image }}">
            </div>

            <div class="row mb-3">
                <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>
                <div class="col-md-6">
                    <input id="price" type="text" class="form-control" name="price"
                        value="{{ $unitEdit->price }}" required autocomplete="price">
                </div>
            </div>

            {{-- <div class="row mb-3">
                <label for="color" class="col-md-4 col-form-label text-md-end">{{ __('Color') }}</label>
                <div class="col-md-6">
                    <input id="color" type="text" class="form-control" name="color"
                        value="{{ $unitEdit->color }}" required autocomplete="color">
                </div>
            </div> --}}

            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary text-black">
                        {{ __('Edit Unit') }}
                    </button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // FORMAT PRICE
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
        document.getElementById('unit_image').addEventListener('change', function(event) {
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
