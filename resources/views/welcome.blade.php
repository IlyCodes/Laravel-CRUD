@extends('layout')

@section('content')

<div class="flex items-center">
    <h1 class="text-3xl font-bold">CRUD APP</h1>
    <a href="{{ url('/users') }}" class="text-lg font-semibold leading-6 text-blue-900 ml-8 hover:underline">Users</a>
    <a href="{{ url('/create') }}" class="text-lg font-semibold leading-6 text-blue-900 ml-8 hover:underline">Create</a>
</div>


@endsection