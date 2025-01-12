@extends('base')

@section('content')
    
    <p>la hora actual es: <?php echo date('d-m-Y H:i'); ?></p>

    <a href="{{ route('crud') }}">ir al crud</a>
    <a href="{{ route('for') }}">ir a los for</a>

@endsection

 