@extends('layouts.template')

@section('link')
    <!-- Include your styles and scripts here -->
    <!-- Example: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
@endsection

@section('content')
    <div class="container mt-5 mb-5">
        <h1>List Pesanan</h1>

        <div class="text-end">
            <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="Basic example">
                    <button class="btn btn-primary text-black" type="submit">
                        <a href="{{ route('pesanan.add') }}">Tambah Pesanan</a>
                    </button>
                </div>
            </div>
        </div>

        <form action="{{ route('pesanan.list') }}" method="GET" class="form-inline w-25 d-flex gap-2">
            <input class="form-control" type="search" name="search" placeholder="search">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form>

        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Product</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanans as $order)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            @if ($order->user)
                                {{ $order->user_id }}
                            @else
                                User not available
                            @endif
                        </td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->tanggal_pemesanan }}</td>
                        <td>{{ $order->description }}</td>
                        <td>
                            <form method="POST" action="{{ route('pesanan.edit', $order->id) }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-warning" type="submit">Update</button>
                            </form>

                                <form method="POST" action="{{ route('pesanan.destroy', $order->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>

            <div>
                <!-- Pagination links -->
                {{-- {{ $pesanans->links() }} --}}
            </div>
        </div>
    </div>
@endsection
