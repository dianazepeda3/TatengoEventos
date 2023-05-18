<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use App\Models\Producto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paquetes = Paquete::all(); 
        return view('/admin/paquete/list-paquetes', compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all();       
        return view('/admin/paquete/add-paquete', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'precio' => 'numeric|min:0|required',           
            'descripcion' => 'string|nullable',    
        ]);

        // Crear un nuevo paquete
        $paquete = new Paquete();
        $paquete->nombre = $request->nombre;
        $paquete->descripcion = $request->descripcion;
        $paquete->precio = $request->precio;
        $paquete->save();
        
        $paqueteId = $paquete->id;
        $productos = Producto::whereDoesntHave('paquete', function ($query) use ($paqueteId) {
            $query->where('paquete_id', $paqueteId);
        })->get();           
        return view('/admin/paquete/add-paquete-producto', compact('productos', 'paquete'));
    }  

    public function show_producto(Paquete $paquete)
    {
        //$productos = Producto::all(); 
        //$productos = Producto::whereDoesntHave('paquete')->get(); 
       $paqueteId = $paquete->id;
        $productos = Producto::whereDoesntHave('paquete', function ($query) use ($paqueteId) {
            $query->where('paquete_id', $paqueteId);
        })->get();        
                 
        return view('/admin/paquete/add-paquete-producto', compact('productos', 'paquete'));
    }

    public function add_producto(Request $request, Paquete $paquete){
        $request->validate([            
            'producto_id' => 'numeric|required',
            'cantidad' => 'numeric|min:0|required',
        ]);
        $producto = Producto::find($request->producto_id);        
        $producto->paquete()->attach($paquete, ['cantidad' => $request->cantidad]);
        
        $paqueteId = $paquete->id;
        $productos = Producto::whereDoesntHave('paquete', function ($query) use ($paqueteId) {
            $query->where('paquete_id', $paqueteId);
        })->get();        
        return redirect()->route('paquete.producto.show', $paquete);
    }

    /**
     * Display the specified resource.
     */
    public function show(Paquete $paquete)
    {
        $paquetes = Paquete::all(); 
        return view('/admin/paquete/list-paquetes', compact('paquetes'));
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paquete $paquete)
    {
        return view('/admin/paquete/edit-paquete', compact('paquete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paquete $paquete)
    {
        $request->validate([
            'nombre' => 'string|required',
            'precio' => 'numeric|min:0|required',           
            'descripcion' => 'string|nullable',    
        ]);

        // Crear un nuevo paquete
        $paquete->nombre = $request->nombre;
        $paquete->descripcion = $request->descripcion;
        $paquete->precio = $request->precio;
        $paquete->save();
        
        $paquetes = Paquete::all(); 
        return view('/admin/paquete/list-paquetes', compact('paquetes'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paquete $paquete)
    {
        $paquete->delete();
        return redirect()->route('paquete.index');
    }

    public function destroy_producto(Producto $producto, Paquete $paquete)
    {           
        
        $producto->paquete()->detach($paquete->id);
        $paqueteId = $paquete->id;
        $productos = Producto::whereDoesntHave('paquete', function ($query) use ($paqueteId) {
            $query->where('paquete_id', $paqueteId);
        })->get();        
       return redirect()->back()->with('success', 'Producto eliminada exitosamente');
    }
}
