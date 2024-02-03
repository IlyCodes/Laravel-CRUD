@extends('layout')

@section('header')

<h1 class="text-3xl font-bold">
    Add User
</h1>

<a href="{{ url('/users') }}" class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
    Users List
</a>

@endsection

@section('content')

<x-error />

<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

    <form class="space-y-6" action="{{ route('users.store') }}" method="POST">
        @csrf

        <div>
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
                <input id="name" name="name" type="name" placeholder="John Doe" required class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" placeholder="johndoe@gmail.com" required class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
            <div class="mt-2">
                <input id="password" name="password" type="password" autocomplete="current-password" required placeholder="********" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-gray-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Submit</button>
        </div>

    </form>

</div>


@endsection