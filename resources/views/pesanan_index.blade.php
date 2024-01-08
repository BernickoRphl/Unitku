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
<div class="container mx-auto mt-10 mb-10 px-16">

        <div class="text-start">

            <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">

                <div class="btn-group me-2" role="group" aria-label="Basic example">

                    <button
                        class="btn text-primary border-blue-950 border-2 hover:bg-blue-950 hover:text-white rounded-full px-4 py-2 mt-5"
                        type="submit">
                        <a href="{{ route('pesanan.form') }}">Tambah Pesanan</a>
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

            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <tr>
                        <th scope="col" class="px-4 py-2 text-center">No</th>
                        <th scope="col" class="px-4 py-2 text-center">User</th>
                        <th scope="col" class="px-4 py-2 text-center">Product</th>
                        <th scope="col" class="px-4 py-2 text-center">Jumlah</th>
                        <th scope="col" class="px-4 py-2 text-center">Tanggal Pemesanan</th>
                        <th scope="col" class="px-4 py-2 text-center">Bukti Pembayaran</th>
                        <th scope="col" class="px-4 py-2 text-center">Status</th>
                        <th scope="col" class="px-4 py-2 text-center">Address</th>
                        <th scope="col" class="px-4 py-2 text-center">Description</th>
                        <th scope="col" class="px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $deletedRow = 0;
                    @endphp

                    @foreach ($pesanan as $pesanans)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $loop->iteration - $deletedRow }}</td>
                            <td class="border px-4 py-2">
                                @if ($pesanans->user)
                                    {{ $pesanans->user->name }}
                                @else
                                    User not available
                                @endif
                            </td>
                            <td class="border px-4 py-2">
                                @if ($pesanans->products->isNotEmpty())
                                    @foreach ($pesanans->products as $product)
                                        {{ $product->product_name }}<br>
                                    @endforeach
                                @else
                                    <input type="text" class="delete-input" value="{{ $pesanans->product_name }}">
                                    @php
                                        $deletedRow++;
                                    @endphp
                                @endif
                            </td>
                            <td class="border px-4 py-2">{{ $pesanans->jumlah }}</td>
                            <td class="border px-4 py-2">{{ $pesanans->tanggal_pemesanan }}</td>

                            <td class="border px-4 py-2">
                                <img src="{{ asset('storage/' . $pesanans->image) }}" alt="{{ $pesanans->product_name }}"
                                    class="w-40 h-auto">
                            </td>

                            <td class="border px-4 py-2">{{ $pesanans->status->name }}</td>
                            <td class="border px-4 py-2">{{ $pesanans->address }}</td>
                            <td class="border px-4 py-2">{{ $pesanans->description }}</td>
                                <td class="border px-4 py-2">
                                    <button class="btn text-primary" type="submit">
                                        <a href="{{ route('review.form', ['pesanan' => $pesanans->id]) }}">Tambah Review</a>
                                    </button>
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

    <script>
        function deleteRowOnEmpty() {
            var deleteInputs = document.querySelectorAll('.delete-input');

            deleteInputs.forEach(function(input) {
                var row = input.closest('tr');
                var productName = input.value;

                if (!productName || productName.trim() === '') {
                    row.remove();
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            deleteRowOnEmpty();
        });
    </script>
@endsection
