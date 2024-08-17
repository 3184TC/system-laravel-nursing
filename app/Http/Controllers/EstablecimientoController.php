<?php

namespace App\Http\Controllers;

use App\Models\Establecimiento;

use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $establecimientos = Establecimiento::where('estado', 1)->get();
        return view ('establecimiento.index',compact('establecimientos'));
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
        $establecimientos = new Establecimiento;
        $establecimientos->nombre=$request->input('nombre');
        $establecimientos->direccion=$request->input('direccion');
        $establecimientos->telefono=$request->input('telefono');
        $establecimientos->tipo=$request->input('tipo');
        $establecimientos->save();
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
        $establecimientos = Establecimiento::find($id);
        $establecimientos->nombre=$request->input('nombre');
        $establecimientos->direccion=$request->input('direccion');
        $establecimientos->telefono=$request->input('telefono');
        $establecimientos->tipo=$request->input('tipo');
        $establecimientos->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Establecimiento::find($id);
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
