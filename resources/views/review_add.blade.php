@extends('layouts.template') <!-- Use your base layout if applicable -->

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

        <form method="POST" action="{{ route('pesanan.updateReview', $pesananEdit) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row mb-3">
                <label for="review_id" class="col-md-4 col-form-label text-md-end">{{ __('Review') }}</label>
                <div class="col-md-6">
                    <select name="review_id" id="review_id" required>
                        @foreach ($review as $rev)
                            <option value="{{ $rev->id }}">{{ $rev->description }}</option>
                        @endforeach
                    </select>
                </div>
            </div>



            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary text-black">
                        {{ __('Upload Review') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection



{{-- @section('content')
    <div class="container mt-40 mb-40">
        <h2>Add Review</h2>
        <form action="{{ route('pesanan.update') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="description">Review Description:</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <input type="text" value="{{ $pesanan->review_id }}">
            <button type="submit" class="btn btn-primary">Receive Review</button>
        </form>
    </div>
@endsection
@extends('layouts.template')

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
@endsection --}}
