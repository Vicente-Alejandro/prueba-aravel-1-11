@extends('dashboard.base')

@section('content')    

    <a href='{{ route("category.create") }}'>Go to create</a>

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
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
        @forelse ($categories as $category)
            <tr>
                <td>
                    {{ $category->id }}
                </td>
                <td>
                    {{ $category->name }}
                </td>
                <td>
                    {{ $category->slug }}
                </td>
                <td>
                    <a href="{{ route('category.show', $category->id) }}">Show</a>
                    <a href="{{ route('category.edit', $category->id) }}">Edit</a>

                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure about that?')">
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
    {{ $categories -> links() }}
@endsection
