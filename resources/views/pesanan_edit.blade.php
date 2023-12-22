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
                        name="address" value="{{ $pesananEdit->address }}" required autocomplete="address"
                        autofocus>
                </div>
            </div>

            <div class="row mb-3">

                <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                <div class="col-md-6">

                    <input id="description" type="text" class="form-control" name="description"
                        value="{{ $pesananEdit->description }}" required autocomplete="description">

                </div>

            </div>

            <div class="row mb-3">

                <label for="jumlah" class="col-md-4 col-form-label text-md-end">{{ __('Jumlah') }}</label>

                <div class="col-md-6">

                    <input id="jumlah" type="text" class="form-control" name="jumlah"
                        value="{{ $pesananEdit->jumlah }}" required autocomplete="jumlah">

                </div>

            </div>

            <div class="row mb-3">

                <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                <div class="col-md-6">

                    <select name="status" id="status" required>

                        @foreach ($status as $stats)
                            @if (old('$stats->id', $pesananEdit->stats) === $stats->id)
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
