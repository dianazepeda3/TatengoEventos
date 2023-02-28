<?php

namespace App\Http\Controllers;

use App\Models\Producto;
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
        return view('productos/indexProductos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos/createProducto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string',
            'color' => 'string',
            'total' => 'numeric|min:0',
            'disponible' => 'numeric',
            'precio' => 'numeric',
        ]);
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->color = $request->color;
        $producto->total = $request->total;
        $producto->disponible = $request->disponible;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect('/producto');
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
        return view('productos/editProducto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto): RedirectResponse
    {
        $request->validate([
            'nombre' => 'string|required',
            'descripcion' => 'string',
            'color' => 'string',
            'total' => 'numeric|min:0',
            'disponible' => 'numeric',
            'precio' => 'numeric',
        ]);
        
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->color = $request->color;
        $producto->total = $request->total;
        $producto->disponible = $request->disponible;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto): RedirectResponse
    {
        //
    }
}
