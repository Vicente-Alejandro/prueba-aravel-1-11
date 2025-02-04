{{ $changeTitle() }}

<h1 {{ $attributes->merge(['style' => 'color:red;']) }} >{{ $post->name }}</h1>
<span class="text-black">{{ $post->category->name }}</span>
<hr>
<p class="text-black"> {{ $post->description }} </p>
<p class="text-black"> {{ $post->content }} </p>

<div>
    <a class="text-black" href="{{ route('blog') }}" class="btn btn-primary">Regresar</a>

    {{ $attributes -> filter(fn($value, $key) => ($key == 'data-id'))}}

</div>

@props(['route'])
<p> {{ $route }} </p>


