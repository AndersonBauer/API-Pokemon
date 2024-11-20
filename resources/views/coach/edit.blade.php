@extends('layouts.app')
@section('conteudo')

<form action="{{ url('coach/'. $coach->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="relative z-0 w-full py-2.5 text-center group mx-auto w-64 mt-10 border-2 border-black bg-white ">
            <div class="">
            <label for="nome" class="block mb-2 text-sm font-medium text-black-900 dark:text-black text-xl">Coach Name</label>
                <input class="border-2 border-black text-center" type="text" name="nome" placeholder="Nome" value="{{ $coach->nome}}" required>
            </div>
            <button class="mt-5 text-dark bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-black-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-3 mb-2" type="submit">Update Coach</button> 
        </div>
       
        
    </form>
@endsection