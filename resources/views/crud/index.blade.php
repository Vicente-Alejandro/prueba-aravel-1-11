@extends('base')

@section('content')
    
    <p>la hora actual es: <?php echo date('d-m-Y H:i'); ?></p>

    <h1>CRUD</h1>
    
    <code>{{ $name }}</code>

    @if ($email == 'ale@gmail.com')
        <p>el email es correcto</p>
    @else 
        <p>el email es incorrecto</p>
    @endif

    <a href="{{ route('home') }}">ir a home</a>

    @php
        
        $fecha = 'Esta es una variable de PHP! '.date('d-m-Y H:i');

    @endphp

    <p>{{ $fecha }}</p>
    
@endsection

