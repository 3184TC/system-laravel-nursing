<?php

namespace App\Http\Controllers;

use App\Models\Encargado;
use Illuminate\Http\Request;

class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $encargados = Encargado::all();
        return view ('encargado.index',compact('encargados'));
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
        $encargados = new Encargado();
        $encargados->nombre=$request->input('nombre');
        $encargados->direccion=$request->input('direccion');
        $encargados->telefono=$request->input('telefono');
        $encargados->tipo=$request->input('tipo');
        $encargados->save();
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
        $encargados = Encargado::find($id);
        $encargados->nombre=$request->input('nombre');
        $encargados->direccion=$request->input('direccion');
        $encargados->telefono=$request->input('telefono');
        $encargados->tipo=$request->input('tipo');
        $encargados->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $encargados = Encargado::find($id);
        $encargados->delete();
        return redirect()->back();
    }
}
