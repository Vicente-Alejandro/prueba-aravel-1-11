<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .caja {
            background-color: rgb(185, 169, 169);
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>

    <div class="caja">
        <h1>FORELSE</h1>
        @forelse ($users as $user)
        <li>{{ $user['name'] }}</li>
        @empty
            <li>No se encontraron registros.</li>
        @endforelse
    </div>

    <div class="caja">
        <h1>FOREACH</h1>
        @foreach ($users as $user)
            <li>{{ $user['name'] }}</li>
        @endforeach
        <h2>Otro ejemplo</h2>
        @foreach ([1,2,3,4,5,6,7,8,9] as $item)
            @if ($item == 5)
                <li><strong>{{ $item }}</strong></li>
            @endif
            <li>{{ $item }}</li>
        @endforeach
    </div>


    <a href="{{ route('home') }}">ir a home</a>
    
</body>
</html>