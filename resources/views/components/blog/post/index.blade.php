<div>

    Lista de Posts

    @forelse ($posts as $post)
        <div class="card card-white mt-2">
            <div class="card-header">
                <h3>{{ $post->title }}</h3>
            </div>
            <div class="card-body">
                <p>{{ $post->content }}</p>
                <p>{{ $post->id }}</p>
                <p>{{ $post->name }}</p>
                <p>{{ $post->description }}</p>
                <p>{{ $post->slug }}</p>
                <p>{{ $post->created_at }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route("blog.show", $post) }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    @empty
        <div class="alert alert-warning">
            No hay posts
        </div>
    @endforelse
    <hr class="my-2">
    {{ $posts->links() }}

</div>
