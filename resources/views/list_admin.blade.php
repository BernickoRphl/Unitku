<!-- resources/views/admin/list.blade.php -->

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

        <div class="card-body mt-4">

            <table class="table-auto w-full mx-auto">

                <thead class="bg-gray-800 text-white">

                    <tr>
                        <th scope="col" class="px-4 py-2 text-center">No</th>
                        <th scope="col" class="px-4 py-2 text-center">User</th>
                        <th scope="col" class="px-4 py-2 text-center">Email</th>
                        <th scope="col" class="px-4 py-2 text-center">Is Login</th>
                        <th scope="col" class="px-4 py-2 text-center">Is Active</th>
                        <th scope="col" class="px-4 py-2 text-center">Action</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach ($admin as $admins)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $admins->name }}</td>
                            <td class="border px-4 py-2">{{ $admins->email }}</td>
                            <td class="border px-4 py-2">{{ $admins->is_login }}</td>
                            <td class="border px-4 py-2">{{ $admins->is_active }}</td>

                            <td class="border px-4 py-2">
                                <form method="POST" action="{{ route('admin.edit', $admins->id) }}">
                                    @csrf
                                    @method('PATCH')
                                    <button
                                        class="btn text-primary border-orange-600 border-2 hover:bg-orange-600 hover:text-white rounded-full px-4 py-2 mt-5"
                                        type="submit">Update</button>
                                </form>

                                <form action="{{ route('admin.destroy', $admins->id) }}" method="POST">
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
                {{-- {{ $admin->links() }} --}}
            </div>

        </div>

    </div>
@endsection
