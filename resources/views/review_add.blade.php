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
    <div class="container mt-40 mb-40">
        <h2>Add Review</h2>
        <form action="{{ route('reviews.store') }}" method="post">
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
