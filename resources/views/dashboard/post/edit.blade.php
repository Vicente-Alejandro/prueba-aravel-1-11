@extends('dashboard.base')

@section('content')

    <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @include('dashboard.forms._post-form', ['task' => 'edit'])
        <button type="submit">Enviar</button>
    </form>

@endsection