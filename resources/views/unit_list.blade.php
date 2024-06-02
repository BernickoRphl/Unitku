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

        <div class="text-end">

            <button
                class="btn text-primary border-blue-950 border-2 hover:bg-blue-950 hover:text-white rounded-full px-4 py-2 mt-5"
                type="submit">
                <a href="{{ route('unit.form') }}">Tambah Unit</a>
            </button>

        </div>

        <form action="{{ route('unit.list') }}" method="GET" class="flex items-center gap-2 mt-4">

            <input type="form-control" type="search" name="search" placeholder="search"
                class="form-input border rounded-md px-2 py-1">

            <button type="submit"
                class="btn text-primary border-blue-950 border-2 hover:bg-blue-950 hover:text-white rounded-lg px-2 py-1">Search</button>
        </form>

        <div class="card-body mt-4">

            <div class="overflow-x-auto">
                <table class="table-auto w-full">

                    <tr>

                        <th scope="col" class="px-4 py-2 text-center">No</th>
                        <th scope="col" class="px-4 py-2 text-center">Name</th>
                        <th scope="col" class="px-4 py-2 text-center">Description</th>
                        <th scope="col" class="px-4 py-2 text-center">Price</th>
                        <th scope="col" class="px-4 py-2 text-center">Image</th>
                    </tr>

                    </thead>

                    <tbody>

                        @foreach ($unit as $uni)
                            <tr class="text-center">

                                <td class="border px-4 py-2">{{ $loop->iteration }}</td>

                                <td class="border px-4 py-2">
                                    <a href="/unit/{{ $uni['id'] }}" class="text-blue-500 hover:underline">
                                        {{ $uni['unit_name'] }}
                                    </a>
                                </td>

                                <td class="border px-4 py-2">{{ $uni['unit_desc'] }}</td>
                                <td class="border px-4 py-2">{{ $uni['price'] }}</td>

                                <td class="border px-4 py-2">
                                    <img src="{{ asset('storage/' . $uni->unit_image) }}" alt="{{ $uni->unit_name }}"
                                        class="w-40 h-auto">
                                </td>

                                <td class="border px-4 py-2">

                                    <form method="POST" action="{{ route('unit.edit', $uni['id']) }}">
                                        @csrf
                                        @method('PATCH')
                                        <button
                                            class="btn textprimary border-orange-600 border-2 hover:bg-orange-600 hover:text-white rounded-full px-4 py-2 mt-5"
                                            type="submit">Update</button>
                                    </form>

                                    <form action="{{ route('unit.destroy', $uni) }}" method="POST">
                                        @method('delete')
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
                    {{ $unit->links() }}
                </div>

            </div>

        </div>
    @endsection
