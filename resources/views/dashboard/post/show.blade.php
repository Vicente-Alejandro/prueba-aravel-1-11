
@extends('dashboard.base')

@section('content')

    <div>
        <h1>{{ $post->name }}</h1>
        <p>{{ $post->description }}</p>
        <p>{{ $post->content }}</p>
        <p>{{ $post->category->name }}</p>
        <p>{{ $post->status }}</p>
        <p>{{ $post->slug }}</p>

        <div>
            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" width="200" height="200">
        </div>

        <a href="{{ route('post.edit', $post->id) }}">Edit</a>
        <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure about that?')">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

        <a href="{{ route('post.index') }}">Back</a>        
    </div>

@endsection