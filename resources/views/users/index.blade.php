@extends('layout')

@section('header')

    <h1 class="text-3xl font-bold">
        Users
    </h1>

    <a href="{{ url('/create') }}" class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
        Add User
    </a>

@endsection

@section('content')

    <x-success />
    
    <ul role="list" class="divide-y divide-gray-100">

        @foreach ($users as $user)
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
                <span class="text-4xl material-symbols-outlined">account_circle</span>
                <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $user->name }}</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $user->email }}</p>
                </div>
            </div>
            <div class="shrink-0 flex items-center">
                <a href="{{ route('users.edit', $user->id) }}" class="rounded-md bg-gray-400 px-1.5 py-1 text-sm text-white shadow-sm hover:bg-gray-500">
                    <span class="material-symbols-outlined">edit_square</span>
                </a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button id="deleteButton" data-modal-target="{{ $user->id }}" data-modal-toggle="{{ $user->id }}" class="rounded-md bg-gray-600 px-1.5 py-1 ml-1 text-sm text-white shadow-sm hover:bg-gray-500" type="button">
                        <span class="material-symbols-outlined">delete</span>
                    </button>

                    <div id="{{ $user->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="{{ $user->id }}">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete '{{ $user->name }}'?</p>
                                <div class="flex justify-center items-center space-x-4">
                                    <button data-modal-toggle="{{ $user->id }}" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                        No, cancel
                                    </button>
                                    <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                        Yes, I'm sure
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </li>
        @endforeach

    </ul>

@endsection