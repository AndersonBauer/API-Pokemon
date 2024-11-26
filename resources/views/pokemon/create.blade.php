@extends('layouts.base')

@section('conteudo')

    <form action="{{ url('pokemon') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="mt-5 w-64 mx-auto">
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <h1 class="text-3xl font-bold mb-4">Create a Pokemon</h1>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Pokemon Name</label>
                <input type="text" id="name" name="name" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Type</label>
                <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type" required />
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="power_of_points" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Power Of Points</label>
                <input type="number" name="power_of_points" id="power_of_points" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Power Of Points" required />
            </div>
            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="image">Image:</label>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="file" name="image" id="image" required>
            </div>

            <div class="relative z-0 w-full py-2.5 group mx-auto w-64">
                <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black text-left ">Trainer</label>
                <select id="coach_id" name="coach_id" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>

            <option selected value="">Choose a Trainer</option>
            @foreach($coaches as $coach)
            <option value="{{ $coach->id}}">{{ $coach->nome }}</option>
            @endforeach
            </select>
            <button type="submit" class="  mt-5 text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Pokemon</button>
            </div>
        </div>
    </form>
@endsection