@extends('layouts.template')

@section('content')
    <form method="POST" action="{{route}}">
        @csrf
    </form>
@endsection
