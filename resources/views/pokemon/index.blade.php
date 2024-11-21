@extends('layouts.app')

@section('conteudo')

    @foreach($pokemon as $entidade)
        <div class="relative z-0 w-full py-2.5 group mx-auto w-60 text-center mt-10 border-2 border-black bg-white">
            <h3 class="font-bold text-2xl">{{ $entidade->name }}</h3>
            <p> Type: {{ $entidade->type }}</p>
            <p> Power of Points: {{ $entidade->power_of_points }}</p>

            @if(isset($entidade->coach))
                <p> Trainer: {{$entidade->coach->nome }}</p>
            @else
                <p>Nenhum treinador</p>
            @endif
                <a href="{{ url('pokemon/'.$entidade->id. '/edit') }}" class="bg-blue-400 px-2">Edit</a>
            <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="border font-bold bg-red-500 mb-4 px-2">Delete</button>
            </form>
        </div>
    @endforeach
@endsection