<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = [
            'title' => 'Vista de los Posts',
            'subtitle' => 'Vista de Posts',
            'posts' => Post::select('id','name', 'slug', 'description', 'content', 'category_id', )->orderBy('id', 'desc')->paginate(5),
        ];

        return view('dashboard.post.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = [
            'title' => 'Prueba de PC',
            'subtitle' => 'Creador de Posts',
            'categories' => Category::select('id', 'name')->orderBy('id', 'asc')->get(),
            'post' => new Post(),
        ]; 
        
        return view('dashboard.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {   
        $validated = $request -> validated();
        try {
            Post::create($validated);
            return redirect()->route('post.index')->with('success', ['Post creado con éxito', 'Ahora puede continuar.']);
        } catch (Exception $e) {
            return redirect()->route('post.index')->with('errores', ['Fallo en la creación del post: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $data = [
            'title' => 'Prueba de Vista para los PS',
            'subtitle' => 'Vista de Posts',
            'post' => $post,
        ];
        return view('dashboard.post.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $data = [
            'title' => 'Prueba de PC',
            'subtitle' => 'Creador de Posts',
            'categories' => Category::select('id', 'name')->orderBy('id', 'asc')->get(),
            'post' => $post,
        ];
        return view('dashboard.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Post $post)
    {;
        $data = $request->validated();

        // image
        if ($request->hasFile('image')) {
            if ($post->image) {
                Storage::disk('public')->delete($post->image);
            }
            $fileName = time() . '.' . $request->file('image')->extension();
            $data['image'] = $request->file('image')->storeAs('uploads/posts', $fileName, 'public');
        }

        try {
            $post -> update($data);
            return redirect()->route('post.index')->with('success', ['Post actualizado con éxito']);
        } catch (Exception $e) {
            return redirect()->route('post.index')->with('errores', ['Fallo en la actualización del post: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        $post -> delete();
        return redirect()->route('post.index')->with('success', ['Post eliminado con éxito']);
    }
}
