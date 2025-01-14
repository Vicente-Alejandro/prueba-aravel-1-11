<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return Post::findOrFail(2)->category;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Post::create(
            [
                'name' => 'Esta es una prueba para el nombre',
                'slug' => 'esta-es-una-prueba-para-el-nombre',
                'description' => 'Esta es una prueba para la descripción',
                'content' => 'Este es el contenido',
                'image' => 'https://via.placeholder.com/150',
                'category_id' => 1
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
