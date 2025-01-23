@csrf
<div>
    <label for="name">Ingrese el nombre</label>
    <input type="text" name="name" id="name" placeholder="..." value="{{ old('name', $post->name) }}">
</div>
<div>
    <label for="description">Ingrese la descripción</label>
    <input type="text" name="description" id="description" placeholder="..." value="{{ old('description', $post->description) }}">
</div>
<div>
    <label for="content">Ingrese el contenido</label>
    <input type="text" name="content" id="content" placeholder="..." value="{{ old('content', $post->content) }}">
</div>
<div>
    <label for="category_id">Ingrese la categoria</label>
    <select name="category_id" id="category_id">
        @forelse($categories -> reverse() as $category)
        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
        @empty
        <p>No se encontraron registros o hubo algún error</p>
        @endforelse
    </select>
</div>
<div>
    <label for="status">Ingrese el estado</label>
    <select name="status" id="status" value="{{ $post->status }}">
        <option value="PUBLISHED" {{ $post->status == "PUBLISHED" ? 'selected' : '' }}>Activo</option>
        <option value="DRAFT" {{ $post->status == "DRAFT" ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>

@if ( isset($task) && $task == 'edit')
    <div class="">
        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image" value="{{ old('image', $post->image) }}">
    </div>
@endif


<input type="hidden" name="slug" id="slug" value="{{ $post->slug }}">