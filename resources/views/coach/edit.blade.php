@extends('layouts.app')
@section('conteudo')

<form action="{{ url('coach/'. $coach->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome" value="{{ $coach->nome}}" required>
        <button type="submit">Update Coach</button>
    </form>
@endsection