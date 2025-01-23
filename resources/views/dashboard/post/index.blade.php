@extends('dashboard.base')

@section('content')    

    <a href='{{ route("post.create") }}'>Go to create</a>

    <table>
        <caption>List of categories</caption>
        <thead>
            <tr>
                <th>
                    ID
                </th>    
                <th>
                    Name
                </th>
                <th>
                    Slac
                </th>
                <th>
                    Category
                </th>
                <th>
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
        @forelse ($posts as $post)
            <tr>
                <td>
                    {{ $post->id }}
                </td>
                <td>
                    {{ $post->name }}
                </td>
                <td>
                    {{ $post->slug }}
                </td>
                <td>
                    {{ $post->category->name }}
                </td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}">Show</a>
                    <a href="{{ route('post.edit', $post->id) }}">Edit</a>

                    <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure about that?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No records found</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $posts -> links() }}
@endsection
