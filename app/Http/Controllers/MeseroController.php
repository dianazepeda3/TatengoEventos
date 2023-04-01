<?php

namespace App\Http\Controllers;

use App\Models\Mesero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MeseroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meseros = Mesero::all();
        return view('/admin/mesero/list-meseros', compact('meseros'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/mesero/add-mesero');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'telefono' => 'digits:10|required',
            'puesto' => 'string|required',            
            'sueldo' => 'numeric|min:0|required',
            'estatus' => 'numeric|min:1|max:3|required',
        ]);

        Mesero::create($request->all());
        return redirect()->route('mesero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mesero $mesero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mesero $mesero)
    {
        return view('/admin/mesero/edit-mesero', compact('mesero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mesero $mesero): RedirectResponse
    {
        $request->validate([
            'nombre' => 'string|required',
            'telefono' => 'digits:10|required',
            'puesto' => 'string|required',            
            'sueldo' => 'numeric|min:0|required',
            'estatus' => 'numeric|min:1|max:3|required',
        ]);

        Mesero::where('id', $mesero->id)->update($request->except('_token', '_method'));

        return redirect()->route('mesero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesero $mesero)
    {
        $mesero->delete();
        return redirect()->route('mesero.index');
    }
}
