<!-- resources/views/list_admin.blade.php -->

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

    <form action="{{ route('admin.create') }}" method="POST">
        @csrf
        <!-- Isi formulir di sini -->
        <button type="submit"  class="btn text-primary border-blue-950 border-2 hover:bg-blue-950 hover:text-white rounded-full px-4 py-2 mt-5"
        >Tambah Admin</button>
    </form>

        <div class="card-body mt-4">
            <table class="table-auto w-full mx-auto">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th scope="col" class="px-4 py-2 text-center">No</th>
                        <th scope="col" class="px-4 py-2 text-center">User</th>
                        <th scope="col" class="px-4 py-2 text-center">Role ID</th>
                        <th scope="col" class="px-4 py-2 text-center">Email</th>
                        <th scope="col" class="px-4 py-2 text-center">Is Login</th>
                        <th scope="col" class="px-4 py-2 text-center">Is Active</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="text-center">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->role_id}}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                            <td class="border px-4 py-2">{{ $user->is_login }}</td>
                            <td class="border px-4 py-2">{{ $user->is_active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                <!-- Pagination links -->
                {{-- {{ $users->links() }} --}}
            </div>
        </div>
    </div>
@endsection
