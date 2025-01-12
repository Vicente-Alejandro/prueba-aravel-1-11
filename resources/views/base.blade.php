<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('images/v2.png') }}" type="">
</head>
<body style="background-color:rgb(185, 169, 169);">
    
    <h1>Base html 2</h1>

    @yield('navbar')

    @yield('sidebar')

    <div>
        @yield('content')
    </div>

    @yield('footer')

    @extends('scripts')

</body>
</html>