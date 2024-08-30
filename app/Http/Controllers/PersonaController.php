<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $personas = Persona::where('estado', 1)->get();
        return view ('persona.index',compact('personas'));
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
        //guardar
        $personas = new Persona;
        $personas->nombre=$request->input('nombre');
        $personas->apellido=$request->input('apellido');
        $personas->genero=$request->input('genero');
        $personas->cargo=$request->input('cargo');
        $personas->ci=$request->input('ci');
        $personas->celular=$request->input('celular');
        $personas->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //actUALIZAR
        $personas = Persona::find($id);
        $personas->nombre=$request->input('nombre');
        $personas->apellido=$request->input('apellido');
        $personas->genero=$request->input('genero');
        $personas->cargo=$request->input('cargo');
        $personas->ci=$request->input('ci');
        $personas->celular=$request->input('celular');
        $personas->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Persona::find($id);
        if ($estado->estado == 1 ) {
            $estado->estado = 0;
            $estado->update();
        } else {
            $estado->estado = 1;
            $estado->update();
        }
        
        return redirect()->back();
    }
}
