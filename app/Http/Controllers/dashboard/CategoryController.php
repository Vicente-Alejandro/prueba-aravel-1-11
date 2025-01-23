<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Exception;

final class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : \Illuminate\Contracts\View\View // response
    {   
        $data = [
            'title' => 'Vista de las Categorias',
            'subtitle' => 'Vista de las Categorias',
            'categories' => Category::select('id','name', 'slug')->orderBy('id', 'desc')->paginate(5),
        ];

        return view('dashboard.category.index', $data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Prueba de Categoría',
            'subtitle' => 'Creador de Categorías',
            'category' => new Category(),
        ]; 
        
        return view('dashboard.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $validated = $request -> validated();
        try {
            Category::create($validated);
            return redirect()->route('category.index')->with('success', ['Categoría creada con éxito', 'Ahora puede continuar.']);
        } catch (Exception $e) {
            return redirect()->route('category.index')->with('errores', ['Fallo en la creación de la categoría: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        $data = [
            'title' => 'Prueba de Vista para la Categoria',
            'subtitle' => 'Vista de Categoria',
            'category' => $category,
        ];
        return view('dashboard.category.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $data = [
            'title' => 'Prueba de Categoria',
            'subtitle' => 'Editor de Categoria',
            'category' => $category,
        ];
        return view('dashboard.category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, Category $category)
    {
        $data = $request->validated();

        // image
        try {
            $category -> update($data);
            return redirect()->route('category.index')->with('success', ['Categoria actualizado con éxito']);
        } catch (Exception $e) {
            return redirect()->route('category.index')->with('errores', ['Fallo en la actualización de la categoria: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category -> delete();
        return redirect()->route('category.index')->with('success', ['Categoria eliminada con éxito']);
    }
}
