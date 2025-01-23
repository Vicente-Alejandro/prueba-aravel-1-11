@extends('dashboard.base')

@section('content')

    <form action="{{ route('post.store') }}" method="POST">

        @include('dashboard.forms._post-form')
        <button type="submit">Enviar</button>
    </form>

@endsection