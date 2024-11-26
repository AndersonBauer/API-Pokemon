@extends('layouts.app')
@section('conteudo')

    <form action="{{ url('coaches') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mx-auto w-64 mt-10 text-center">
            <h1 class="font-bold text-3xl">Create a Coach</h1>
            <div class="relative z-0 2-full py-2.5 group mc-auto w-64">
                <label for="nome" class="block mb-2 text-sm font-medium text-black-900 dark:text-black text-left">Coach Name</label>
                <input type="text" id="nome" name="nome" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="image">Image:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="image" id="image" required>
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64 text-center">
                <button type="submit" class="text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Coach</button>
            </div> 
        </div>
    </form>
 @endsection
