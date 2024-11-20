@extends('layouts.app')
@section('conteudo')
    @foreach($coach as $entidade)
        <div class="relative z-0 w-full py-2.5 group mx-auto w-64 text-center mt-10 border-2 border-black bg-white">
            <h3 class="font-bold text-2xl">{{ $entidade->nome }}</h3>
            <a href="{{ url('coach/'.$entidade->id. '/edit') }}" class="bg-blue-400 px-2">Edit</a>
            <form action="{{ url('coach/'.$entidade->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="border font-bold bg-red-500 mb-4 px-2" type="submit">Delete</button>
            </form>
        </div>
    @endforeach
@endsection