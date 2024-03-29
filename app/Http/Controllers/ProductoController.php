<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('/admin/producto/list-productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('/admin/producto/add-producto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {           
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string|nullable',
            'color' => 'string|nullable',
            'total' => 'integer|min:0|required',
            'disponible' => 'integer|min:0|required',
            'precio' => 'numeric|min:0|required',
            'categoria' => 'string|required',
        ]);
        
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        //$producto->codigo = $request->codigo;       
        $producto->categoria_id = $request->categoria;
        $producto->color = $request->color;        
        $producto->total = $request->total;
        $producto->disponible = $request->disponible;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->save();

        
        return redirect()->route('producto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos/showProducto', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('/admin/producto/edit-producto', compact('producto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string|nullable',
            'color' => 'string|nullable',
            'total' => 'integer|min:0|required',
            'disponible' => 'integer|min:0|required',
            'precio' => 'numeric|min:0|required',
            'categoria' => 'string|required',
        ]);
        
    
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;                
        $producto->color = $request->color;                                     
        $producto->categoria_id = $request->categoria;
        $producto->total = $request->total;
        $producto->disponible = $request->disponible;
        $producto->precio = $request->precio;
        $producto->save();             

        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {                
        $producto->delete();
        return redirect()->route('producto.index');
    }
}
