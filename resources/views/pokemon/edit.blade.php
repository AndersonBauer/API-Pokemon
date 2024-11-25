@extends('layouts.app')
@section('conteudo')

<form action="{{ url('pokemon/'. $pokemon->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mx-auto w-64 mt-10 text-center">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset($pokemon->image) }}" alt="{{ $pokemon->name }}">
            <div class="mt-3 mb-3">
                <label for="name" class="block mb-2 text-sm font-medium text-black-900 dark:text-black text-left">Pokemon Name</label>
                <input class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="name" placeholder="Name" value="{{ $pokemon->name}}" required>
            </div>
            <div class="mt-3 mb-2">
                <label for="type" class="block mb-2 text-sm font-medium text-black-900 dark:text-black text-left">Type</label>
                <input class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="text" name="type" placeholder="Type" value="{{ $pokemon->type}}" required>
            </div>
            <div class="mt-3 mb-2">
                <label for="power_of_points" class="block mb-2 text-sm font-medium text-black-900 dark:text-black text-left">Power Of Points</label>
                <input class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="number" name="power_of_points" placeholder="Power_Of_Points" value="{{ $pokemon->power_of_points}}" required>
            </div>
            <div class="mt-3 mb-2">
                <label class="block mb-2 text-sm font-medium text-black-900 dark:text-black text-left" for="image">Image:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="image" id="image">
            </div>
            <button class="text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3 mb-2" type="submit">Update Pokemon</button>
        </div>
    </form>
@endsection
    
