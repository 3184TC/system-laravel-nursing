<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $grados = Grado::where('estado', 1)->get();
        return view ('grado.index',compact('grados'));
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
        $grados = new Grado;
        $grados->id_persona=$request->input('id_persona');
        $grados->nivel=$request->input('nivel');
        $grados->especialidad=$request->input('especialidad');
        $grados->save();
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
        $grados = Grado::find($id);
        $grados->id_persona=$request->input('id_persona');
        $grados->nivel=$request->input('nivel');
        $grados->especialidad=$request->input('especialidad');
        $grados->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Grado::find($id);
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