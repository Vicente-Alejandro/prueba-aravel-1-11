@extends('dashboard.base')

@section('content')

    <div>
        <code>{{ $category->id }}</code>
        <h1>{{ $category->name }}</h1>
        <p>{{ $category->slug }}</p>
        <a href="{{ route('category.edit', $category) }}">Editar</a>
        <form action="{{ route('category.destroy', $category) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
        <a href="{{ route('category.index') }}">Regresar</a>
    </div>

@endsection

