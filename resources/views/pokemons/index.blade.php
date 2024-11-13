<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($pokemon as $entidade)
        <div>
            <h3>{{ $entidade->name }}</h3>
            <p>{{ $entidade->type }}</p>
            <p>{{ $entidade->power_of_points }}</p>
            <a href="{{ url('pokemon/'.$entidade->id.'/edit') }}">Edit</a>
            <form action="{{ url('pokemon/'.$entidade->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>