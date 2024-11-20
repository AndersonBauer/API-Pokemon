<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($coach as $entidade)
        <div>
            <h3>{{ $entidade->nome }}</h3>
            <a href="{{ url('coach/'.$entidade->id. '/edit') }}">Edit</a>
            <form action="{{ url('coach/'.$entidade->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach
</body>
</html>