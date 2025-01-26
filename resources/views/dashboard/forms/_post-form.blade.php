@csrf
<div>
    <label class="label-control" for="name">Ingrese el nombre</label>
    <input class="form-control" type="text" name="name" id="name" placeholder="..." value="{{ old('name', $post->name) }}">
</div> 
<div>
    <label class="label-control" for="description">Ingrese la descripción</label>
    <input class="form-control" type="text" name="description" id="description" placeholder="..." value="{{ old('description', $post->description) }}">
</div> 
<div>
    <label class="label-control" for="content">Ingrese el contenido</label>
    <input class="form-control" type="text" name="content" id="content" placeholder="..." value="{{ old('content', $post->content) }}">
</div> 
<div>
    <label class="label-control" for="category_id">Ingrese la categoria</label>
    <select class="form-control" name="category_id" id="category_id">
        @forelse($categories -> reverse() as $category)
        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
        @empty
        <p>No se encontraron registros o hubo algún error</p>
        @endforelse
    </select>
</div>
<div>
    <label class="label-control" for="status">Ingrese el estado</label>
    <select class="form-control" name="status" id="status" value="{{ $post->status }}">
        <option value="PUBLISHED" {{ $post->status == "PUBLISHED" ? 'selected' : '' }}>Activo</option>
        <option value="DRAFT" {{ $post->status == "DRAFT" ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>

@if ( isset($task) && $task == 'edit')
    <div class="">
        <label class="label-control" for="image">Imagen:</label>
        <input class="form-control" type="file" name="image" id="image" value="{{ old('image', $post->image) }}">
    </div> 
@endif


<input type="hidden" name="slug" id="slug" value="{{ $post->slug }}">