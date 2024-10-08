<?php

namespace App\Http\Controllers;

use App\Models\Asistencial;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class AsistencialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $asistencials = Asistencial::where('estado', 1)->get();
        return view('asistencial.index', compact('asistencials'));
        
    }

    public function pdf(){

        $asistencials=Asistencial::all();
        $pdf = Pdf::loadView('asistencial.pdf', \compact('asistenciales'));
        return $pdf->stream();
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
        $asistencials->genero=$request->input('genero');
        $asistencials->cargo=$request->input('cargo');
        $asistencials->ci=$request->input('ci');
        $asistencials->celular=$request->input('celular');
        
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
        $asistencials = Asistencial::find($id);
        $asistencials->nombre=$request->input('nombre');
        $asistencials->genero=$request->input('genero');
        $asistencials->cargo=$request->input('cargo');
        $asistencials->ci=$request->input('ci');
        $asistencials->celular=$request->input('celular');
        $asistencials->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Asistencial::find($id);
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
