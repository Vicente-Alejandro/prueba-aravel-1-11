@extends('dashboard.base')

@section('content')
    
    <form action="{{ route('category.store') }}" method="POST">
        
        @include('dashboard.forms._category-form')
        <button type="submit">Enviar</button>
    </form>

@endsection