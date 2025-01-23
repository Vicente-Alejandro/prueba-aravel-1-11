@extends('dashboard.base')

@section('content')

    <form action="{{ route('category.update', $category) }}" method="POST" >
        @method('PATCH')
        @include('dashboard.forms._category-form')
        <button type="submit">Enviar</button>
    </form>

@endsection