<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response // response
    {   
        return (Category::find(1)->update([
            'name' => 'Esta es una prueba para la categoria actualizada3',
            'slug' => 'esta-es-una-prueba-para-la-categoria-actualizada3',
        ])) ? response("<meta http-equiv='refresh' content='2;url=/'>Operación Exitosa", 200)->header('Content-Type', 'text/html') : 'Operacion fallida';
        

        // echo json_encode($post);

        // $post -> create([
        //     'name' => 'Esta es una prueba para la categoria',
        //     'slug' => 'esta-es-una-prueba-para-la-categoria'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
