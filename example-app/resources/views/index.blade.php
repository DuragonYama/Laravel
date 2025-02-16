<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
    </head>
<body>
    <ul>
        @foreach ($planets as $planet)
            <li>
                <h2><a href="{{ route('planets.show', $planet->name) }}">{{ $planet->name }}</a></h2>
                <p>{{ $planet->description }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>

