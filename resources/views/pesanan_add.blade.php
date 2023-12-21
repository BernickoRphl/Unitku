@extends('layouts.template')

@section('content')
    <div class="container mt-5 mb-5">
        <h1>List Pesanan</h1>

        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Description</th>
                        <!-- Add more columns as needed -->
                    </tr>
                </thead>

                <tbody>
                    @foreach ($pesanan as $order)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $order->tanggal_pemesanan }}</td>
                            <td>{{ $order->description }}</td>
                            <!-- Add more cells for additional columns -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
