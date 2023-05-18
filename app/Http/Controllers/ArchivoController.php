<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $archivos = Archivo::all(); 
        return view('/admin/archivo/list-archivos', compact('archivos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/archivo/add-archivo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'archivo' => 'required',       
        ]);

        if ($request->hasFile('archivo') && $request->file('archivo')->isValid()){  
            $ruta = $request->archivo->store('public');       

            //crear archivo
            $archivos = new Archivo();
            $archivos->hash = $ruta;
            $archivos->nombre_original=$request->archivo->getClientOriginalName();
            $archivos->nombre = $request->nombre;
            $archivos->extension=$request->archivo->guessExtension();
            $archivos->mime=$request ->archivo->getMimeType();
            $archivos->save();                        
        }        
        return redirect()->route('archivo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Archivo $archivo)
    {                
        if (!$archivo) {
            abort(404);
        }

        $ruta = $archivo->hash;

        if (!Storage::exists($ruta)) {
            abort(404);
        }

        $nombreArchivo = $archivo->nombre_original;

        return response()->file(storage_path('app/' . $ruta), ['filename' => $nombreArchivo]);
    }    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Archivo $archivo)
    {
        $extension = File::extension($archivo->hash);

        if ($extension == 'jpg' || $extension == 'png') {
            $imagen = true;
        } else {
            $imagen = false;
        }            
        return view('/admin/archivo/edit-archivo', compact('archivo', 'imagen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Archivo $archivo)
    {
        $request->validate([
            'nombre' => 'string|required',                   
        ]);
        $archivo->nombre = $request->nombre;
        $archivo->save();                        
                
        return redirect()->route('archivo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Archivo $archivo)
    {
        $archivo->delete();
        return redirect()->route('archivo.index');
    }

    public function descargar(Archivo $archivo)
    {
        return Storage::download($archivo->hash, $archivo->nombre, ['Content-Type' => $archivo->mime]);
    }
}
