@extends('dashboard.base')

@section('content')

<a href="{{ route('post.create') }}" 
   class="inline-block mb-4 px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">
    Go to create
</a>

<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-300 bg-white rounded-lg">
        <caption class="text-lg font-bold mb-2">List of categories</caption>
        <thead class="bg-gray-100 border-b">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase">Slug</th>
                <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase">Category</th>
                <th class="px-6 py-3 text-left text-sm font-bold text-gray-600 uppercase acciones">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $post->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $post->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $post->slug }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $post->category->name }}</td>
                    <td class="px-6 py-4 text-sm acciones">
                        <a href="{{ route('post.show', $post->id) }}" 
                           class="text-blue-500 hover:underline">Show</a>
                        <a href="{{ route('post.edit', $post->id) }}" 
                           class="text-green-500 hover:underline">Edit</a>
                        <form action="{{ route('post.destroy', $post->id) }}" method="POST" 
                              onsubmit="return confirm('Are you sure about that?')" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-4 py-2 text-white bg-red-500 rounded hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                        No records found
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $posts->links() }}
</div>

@endsection
