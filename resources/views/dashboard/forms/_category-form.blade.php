@csrf
<div>
    <label class="label-control" for="name">Ingrese el nombre</label>
    <input class="form-control" type="text" name="name" id="name" placeholder="..." value="{{ old('name', $category->name) }}">
</div>

<input type="hidden" name="slug" id="slug" value="{{ $category->slug }}">