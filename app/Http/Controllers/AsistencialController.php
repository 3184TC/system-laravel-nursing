<?php

namespace App\Http\Controllers;

use App\Models\Asistencial;
use Illuminate\Http\Request;


class AsistencialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $asistencials = Asistencial::all();
        return view ('Asistencial.index',compact('asistencials'));
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
        $asistencials = new Asistencial;
        $asistencials->nombre=$request->input('nombre');
        $asistencials->direccion=$request->input('direccion');
        $asistencials->telefono=$request->input('telefono');
        $asistencials->tipo=$request->input('tipo');
        $asistencials->save();
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
        $establecimientos = Asistencial::find($id);
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
        $establecimientos = Asistencial::find($id);
        $establecimientos->delete();
        return redirect()->back();
    }
}
