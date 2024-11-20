@extends('layouts.app')
@section('conteudo')

<form action="{{ url('pokemon/'. $pokemon->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="relative z-0 w-full py-2.5 text-center group mx-auto w-64 mt-10 border-2 border-black bg-white">
            <div class="mt-3 mb-3">
                <label for="name" class=" text-left ml-10 block mb-2 text-sm font-medium text-gray-900 dark:text-gray text-xl">Pokemon Name</label>
                <input class="border-2 border-black text-center" type="text" name="name" placeholder="Name" value="{{ $pokemon->name}}" required>
            </div>
            <div class="mt-3 mb-2">
            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark text-xl text-left ml-10">Type</label>
                <input class="border-2 border-black text-center" type="text" name="type" placeholder="Type" value="{{ $pokemon->type}}" required>
            </div>
            <div class="mt-3 mb-2">
            <label for="power_of_points" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark text-xl text-left ml-10">Power Of Points</label>
                <input class="border-2 border-black text-center" type="number" name="power_of_points" placeholder="Power_Of_Points" value="{{ $pokemon->power_of_points}}" required>
            </div>
            
            <button class="text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3 mb-2" type="submit">Update Pokemon</button>
        </div>
    </form>
@endsection
    
