@extends('layouts.app')
@section('conteudo')
    <form action="{{ url('coach') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-5">
            <label for="nome" class="block mb-2 text-sm font-medium text-black-900 dark:text-black">Coach Name</label>
            <input type="text" id="nome" name="nome" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
        </div>
        <button type="submit" class="text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Coach</button>
@endsection