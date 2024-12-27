<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planets</title>
</head>
<body>
    <ul>
        @if (isset($planets))
            @foreach ($planets as $planet)
            <li>
               <h2> <a href="/planets/{{ $planet['name'] }}">{{ $planet['name'] }}</a></h2>
                <p>{{ $planet['description'] }}</p>
            </li>
            @endforeach
        @endif
        @if (isset($planetss))
            <li>
                <h2> {{ $planetss['name'] }}</h2>
                <p> {{ $planetss['description'] }}</p>
            </li>
        @endif
    </ul>
</body>
</html>
