<?php

namespace App\Http\Controllers;

use App\Models\EventoFoto;
use App\Models\Categoria;
use App\Models\Archivo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EventoFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventoFotos = EventoFoto::all();         
        return view('/admin/evento_foto/list-eventos', compact('eventoFotos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('/admin/evento_foto/add-evento', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',            
            'categoria_id' => 'numeric|required',    
            'descripcion' => 'string|nullable',    
        ]);

        // Crear un nuevo paquete
        $evento = new EventoFoto();
        $evento->nombre = $request->nombre;        
        $evento->descripcion = $request->descripcion;
        $evento->categoria_id = $request->categoria_id;
        $evento->save();                
            
        return redirect()->route('eventofoto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(EventoFoto $eventofoto)
    {
        $eventoId = $eventofoto->id;
        $archivos = Archivo::whereDoesntHave('evento_fotos', function ($query) use ($eventoId) {
            $query->where('evento_foto_id', $eventoId);
        })->get();        
                 
        return view('/admin/evento_foto/add-evento-archivo', compact('archivos', 'eventofoto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventoFoto $eventofoto)
    {
        $categorias = Categoria::all();
        return view('/admin/evento_foto/edit-evento', compact('categorias', 'eventofoto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventoFoto $eventofoto)
    {
        $request->validate([
            'nombre' => 'string|required',            
            'categoria_id' => 'numeric|required',    
            'descripcion' => 'string|nullable',    
        ]);

        // Crear un nuevo paquete
        $eventofoto->nombre = $request->nombre;        
        $eventofoto->descripcion = $request->descripcion;
        $eventofoto->categoria_id = $request->categoria_id;
        $eventofoto->save();                
            
        return redirect()->route('eventofoto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventoFoto $eventofoto)
    {              
        $eventofoto->delete();
        return redirect()->route('eventofoto.index');
    }

    public function add_archivo(Request $request, EventoFoto $eventofoto){
        $request->validate([            
            'archivo_id' => 'required',
        ]);
        $archivo = Archivo::find($request->archivo_id); 
        $archivo->evento_fotos()->attach($eventofoto);        
                     
        return redirect()->route('eventofoto.show', $eventofoto);
    }
}
