@extends('layouts.template')

@section('link')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
@endsection

@section('content')
    <div class="container mx-auto mt-5 mb-5">

        <div class="text-end">

            <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">

                <div class="btn-group me-2" role="group" aria-label="Basic example">

                    <button class="btn btn-primary text-black" type="submit">
                        <a href="{{ route('product.form') }}">Tambah Produk</a>
                    </button>

                </div>

            </div>

        </div>

        <form action="{{ route('pesanan.list') }}" method="GET" class="flex items-center gap-2 mt-4">

            <input type="form-control" type="search" name="search" placeholder="search"
                class="form-input border rounded-md px-2 py-1">
            <button type="submit" class="btn btn-outline-success">Search</button>

        </form>

        <div class="card-body mt-4">

            <table class="table-auto w-full mx-auto">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th scope="col" class="px-4 py-2 text-center">No</th>
                        <th scope="col" class="px-4 py-2 text-center">User</th>
                        <th scope="col" class="px-4 py-2 text-center">Product</th>
                        <th scope="col" class="px-4 py-2 text-center">Jumlah</th>
                        <th scope="col" class="px-4 py-2 text-center">Tanggal Pemesanan</th>
                        <th scope="col" class="px-4 py-2 text-center">Status</th>
                        <th scope="col" class="px-4 py-2 text-center">Address</th>
                        <th scope="col" class="px-4 py-2 text-center">Description</th>
                        <th scope="col" class="px-4 py-2 text-center">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach ($pesanans as $order)
                        <tr class="text-center">

                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>

                            <td class="border px-4 py-2">
                                @if ($order->user)
                                    {{ $order->user->name }}
                                @else
                                    User not available
                                @endif
                            </td>

                            <td class="border px-4 py-2">
                                @if ($order->product)
                                    {{ $order->product->product_name }}
                                @else
                                    Product Name
                                @endif
                            </td>
                            <td class="border px-4 py-2">{{ $order->jumlah }}</td>
                            <td class="border px-4 py-2">{{ $order->tanggal_pemesanan }}</td>
                            <td class="border px-4 py-2">{{ $order->status->name }}</td>
                            <td class="border px-4 py-2">{{ $order->address }}</td>
                            <td class="border px-4 py-2">{{ $order->description }}</td>

                            <td class="border px-4 py-2">

                                <form method="POST" action="{{ route('pesanan.edit', $order->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-warning" type="submit">Update</button>
                                </form>

                                <form action="{{ route('pesanan.destroy', $order->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
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
