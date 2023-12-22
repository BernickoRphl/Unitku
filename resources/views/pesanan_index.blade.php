@extends('layouts.template')

@section('link')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection

@section('content')

    <div class="container mx-auto mt-5 mb-5 pt-4"> <!-- Added pt-4 for padding-top -->
        <div class="text-start">
            <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="Basic example">
                    <button class="btn btn-primary text-black" type="submit">
                        <a href="{{ route('pesanan.add') }}">Tambah Pesanan</a>
                    </button>
                </div>
            </div>
        </div>


        {{-- <form action="/pesanan_list" method="GET" class="flex items-center gap-2 mt-4">
            <input type="form-control" type="search" name="search" placeholder="search"
                class="form-input border rounded-md px-2 py-1">
            <button type="submit" class="btn btn-outline-success">Search</button>
        </form> --}}

        <div class="card-body mt-4">
            <table class="table-auto w-full mx-auto">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th scope="col" class="px-4 py-2 text-center">No</th>
                        <th scope="col" class="px-4 py-2 text-center">User</th>
                        <th scope="col" class="px-4 py-2 text-center">Product</th>
                        <th scope="col" class="px-4 py-2 text-center">Tanggal Pemesanan</th>
                        <th scope="col" class="px-4 py-2 text-center">Status</th>
                        <th scope="col" class="px-4 py-2 text-center">Description</th>
                        <th scope="col" class="px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan as $pesanans)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">
                                @if ($pesanans->user)
                                    {{ $pesanans->user->name }}
                                @else
                                    User not available
                                @endif
                            </td>
                            <td class="border px-4 py-2">
                                @if ($pesanans->product)
                                    {{ $pesanans->product->product_name }}
                                @else
                                    Product Name
                                @endif
                            </td>
                            <td class="border px-4 py-2">{{ $pesanans->tanggal_pemesanan }}</td>
                            <td class="border px-4 py-2">{{ $pesanans->status->name }}</td>
                            <td class="border px-4 py-2">{{ $pesanans->description }}</td>
                            <td class="border px-4 py-2">
                                <form method="POST" action="{{ route('pesanan.edit', $pesanans->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-warning" type="submit">Update</button>
                                </form>
                                <form method="POST" action="{{ route('pesanan.destroy', $pesanans->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                <!-- Pagination links -->
                {{-- {{ $pesanans->links() }} --}}
            </div>
        </div>
    </div>
@endsection
