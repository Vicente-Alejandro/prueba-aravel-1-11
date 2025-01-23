<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('images/v2.png') }}" type="">
    <style>
        table {
            width: 100%; /* Ocupa todo el ancho disponible */
            border-collapse: collapse; /* Quita los bordes dobles */
            margin: 20px 0; /* Agrega margen superior e inferior */
            font-size: 16px; /* Ajusta el tamaño de la fuente */
            font-family: Arial, sans-serif; /* Fuente legible */
        }

        table th, table td {
            border: 1px solid #ddd; /* Bordes de la tabla */
            padding: 8px; /* Espaciado dentro de las celdas */
            text-align: center; /* Alineación del texto */
        }

        table th {
            font-weight: bold; /* Texto en negrita */
        }

        table caption {
            margin-bottom: 10px; /* Espacio debajo del título */
            font-size: 18px; /* Tamaño del título */
            font-weight: bold; /* Negrita */
        }
    </style>


</head>
<body style="background-color:rgb(185, 169, 169);">
    
    <h1>Base de dashboard en <code>html x blade</code> para el {{ $subtitle }}</h1>

    @include('dashboard.fragments._errors-form')
    @include('dashboard.fragments._success-form')
    
    @yield('content')

    @extends('scripts')

</body>
</html>