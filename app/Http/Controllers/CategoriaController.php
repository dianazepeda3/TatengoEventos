<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('/admin/categoria/list-categoria', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        return view('/admin/categoria/add-categoria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string|nullable',        
        ]);

        Categoria::create($request->all());
        return redirect()->route('categoria.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('/admin/categoria/categoria-productos', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        //$categorias = Categoria::all();
        return view('/admin/categoria/edit-categoria', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria): RedirectResponse
    {
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string|nullable',        
        ]);
        Categoria::where('id', $categoria->id)->update($request->except('_token', '_method'));

        return redirect()->route('categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {        
        $categoria->delete();
        return redirect()->route('categoria.index');
    }
    
    public function mostrarCarrusel(){
        $categorias = Categoria::all();
        return view('/admin/categoria/inventario', compact('categorias'));
    }
    
}
