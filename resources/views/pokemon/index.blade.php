@extends('layouts.app')

@section('conteudo')
    <div class="flex flex-wrap justify-center mt-10">
        
    @foreach($pokemon as $entidade)
    <div class="p-4 max-w-sm text-center">
        <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $entidade->name}}</h5>
            <p class="text-sm text-gray-500 dark:text-gray-400">Type: {{ $entidade->type}}</p>
            <p class="text-sm text-gray-500 dark:text-gray-400">Power Of Points: {{ $entidade->power_of_points}}</p>
            @if(isset($entidade->coach))
                <p class="text-sm text-gray-500 dark:text-gray-400"> Trainer: {{$entidade->coach->nome }}</p>
            @else
                <p class="text-red-400">Nenhum treinador</p>
            @endif
            <div class="flex mt-4 md:mt-6">
                <a href="{{ url('pokemon/'.$entidade->id. '/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Pokemon</a>
                <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
                @csrf
                @method ('DELETE')
                <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delete</button>
                </form>
            </div>
        </div>
    </div>

    @endforeach
    </div>
@endsection

