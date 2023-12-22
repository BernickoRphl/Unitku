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
    <div class="container mx-auto mt-60 mb-40 px-16">

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
                                @if ($order->pesanans)
                                    {{ $pesanans->product->product_name }}
                                    <br>
                                @else
                                    No Products
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
                                    <button
                                        class="btn textprimary border-orange-600 border-2 hover:bg-orange-600 hover:text-white rounded-full px-4 py-2 mt-5"
                                        type="submit">Update</button>
                                </form>

                                <form action="{{ route('pesanan.destroy', $order->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button
                                        class="btn text-red-600 border-red-600 border-2 hover:bg-red-600 hover:text-white rounded-full px-4 py-2 mt-5"
                                        type="submit">Delete</button>
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
