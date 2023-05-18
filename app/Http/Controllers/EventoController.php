<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Categoria;
use App\Models\Archivo;
use App\Models\Paquete;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all(); 
        return view('/admin/evento/list-eventos', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('/admin/evento/add-evento', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'nombre_cliente' => 'string|required',
            'cotizacion' => 'numeric|min:0|required',   
            'cantidad_pagada' => 'numeric|min:0|required',   
            'fecha_evento' => 'date|min:0|required',  
            'ubicacion' => 'string|required',   
            'categoria_id' => 'numeric|required',    
            'descripcion' => 'string|nullable',    
        ]);

        // Crear un nuevo paquete
        $evento = new Evento();
        $evento->nombre = $request->nombre;
        $evento->nombre_cliente = $request->nombre_cliente;
        $evento->cotizacion = $request->cotizacion;
        $evento->cantidad_pagada = $request->cantidad_pagada;
        $evento->fecha_evento = $request->fecha_evento;
        $evento->descripcion = $request->descripcion;
        $evento->categoria_id = $request->categoria_id;
        $evento->ubicacion = $request->ubicacion;
        $user = Auth::user();
        $evento->user_id = $user->id;
        $evento->save();                
            
        if(Auth::user()->isAdmin() || Auth::user()->isEmpleado())
        return redirect()->route('evento.index');  
        
        return redirect()->route('evento.categoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento)
    {
        $eventoId = $evento->id;
        $paquetes = Paquete::whereDoesntHave('eventos', function ($query) use ($eventoId) {
            $query->where('evento_id', $eventoId);
        })->get();        
                 
        return view('/admin/evento/add-evento-paquete', compact('paquetes', 'evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evento $evento)
    {
        $categorias = Categoria::all();
        return view('/admin/evento/edit-evento', compact('categorias', 'evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'nombre' => 'string|required',
            'nombre_cliente' => 'string|required',
            'cotizacion' => 'numeric|min:0|required',   
            'cantidad_pagada' => 'numeric|min:0|required',   
            'fecha_evento' => 'date|min:0|required',  
            'ubicacion' => 'string|required',   
            'categoria_id' => 'numeric|required',    
            'descripcion' => 'string|nullable',   
            'estado' => 'numeric|nullable', 
        ]);

        // Crear un nuevo paquete
        $evento->nombre = $request->nombre;
        $evento->nombre_cliente = $request->nombre_cliente;
        $evento->cotizacion = $request->cotizacion;
        $evento->cantidad_pagada = $request->cantidad_pagada;
        $evento->fecha_evento = $request->fecha_evento;
        $evento->descripcion = $request->descripcion;
        $evento->categoria_id = $request->categoria_id;
        $evento->ubicacion = $request->ubicacion;
        if(isset($estado))
            $evento->estado = $request->estado;
        else
            $evento->estado = 0;
        $evento->save();                
            
        if(Auth::user()->isAdmin() || Auth::user()->isEmpleado())
        return redirect()->route('evento.index');  
        
        return redirect()->route('evento.categoria');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('evento.index');
    }   

    public function destroy_paquete(Paquete $paquete, Evento $evento)
    {           
        
        $paquete->eventos()->detach($evento->id);
        return redirect()->route('evento.show', $evento);
    }

    public function add_paquete(Request $request, Evento $evento){
        $request->validate([            
            'paquete_id' => 'required',
            'cantidad' => 'numeric|min:0|required',
        ]);
        $paquete = Paquete::find($request->paquete_id); 
        
        $paquete->eventos()->attach($evento, ['cantidad' => $request->cantidad]);
             
        return redirect()->route('evento.show', $evento);
    }
}