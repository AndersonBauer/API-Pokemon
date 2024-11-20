@extends('layouts.app')
@section('conteudo')
    <form action="{{ url('pokemon') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Pokemon Name</label>
            <input type="text" id="name" name="name" class="bg-white border border-gray-300 text-dark text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-dark dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Name" required />
        </div>
        <div class="mb-5">
            <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Type</label>
            <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type" required />
        </div>
        <div class="mb-5">
            <label for="power_of_points" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">Power Of Points</label>
            <input type="number" name="power_of_points" id="power_of_points" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Power Of Points" required />
        </div>

        <label for="coach_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treinador</label>
        <select required id="coach_id" name="coach_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    
        <option selected value="">Escolha um treinador</option>
		@foreach($coaches as $coach)
        <option value="{{ $coach->id}}">{{ $coach->nome }}</option>
		@endforeach
        </select>

        <button type="submit" class="text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create Pokemon</button>
    </form>
@endsection