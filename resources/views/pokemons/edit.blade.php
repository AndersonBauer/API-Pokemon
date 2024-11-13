@extends('layouts.app')
@section('conteudo')
<form action="{{ url('pokemon') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name}}" required>
        <input type="text" name="type" placeholder="Type" value="{{ $pokemon->type}}" required>
        <input type="number" name="power_of_points" placeholder="Power_Of_Points" value="{{ $pokemon->power_of_points}}" required>
        <button type="submit">Edit Pokemon</button>
    </form>
@endsection
    
