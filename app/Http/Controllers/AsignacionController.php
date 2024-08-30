<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Asistencial;
use App\Models\Establecimiento;
use App\Models\Nombramiento;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
   // Filtrado de Asignaciones generales
   $queryGeneral = Asignacion::where('estado', 1);
    
   // Filtrado por Establecimiento
   $queryEstablecimiento = Asignacion::where('estado', 1);
   if ($request->filled('id_establecimiento')) {
       $queryEstablecimiento->where('id_establecimiento', $request->id_establecimiento);
   }

   // Filtrado por Asistencial
   $queryAsistencial = Asignacion::where('estado', 1);
   if ($request->filled('id_asistencial')) {
       $queryAsistencial->where('id_asistencial', $request->id_asistencial);
   }

   // Filtrado por Nombramiento
   $queryNombramiento = Asignacion::where('estado', 1);
   if ($request->filled('id_nombramiento')) {
       $queryNombramiento->where('id_nombramiento', $request->id_nombramiento);
   }

   // Paginación para cada tabla
   $asignacionsGeneral = $queryGeneral->paginate(5);
   $asignacionsEstablecimiento = $queryEstablecimiento->paginate(5);
   $asignacionsAsistencial = $queryAsistencial->paginate(5);
   $asignacionsNombramiento = $queryNombramiento->paginate(5);

   // Recuperar datos para los selects
   $asistencials = Asistencial::where('estado', 1)->get();
   $establecimientos = Establecimiento::where('estado', 1)->get();
   $nombramientos = Nombramiento::where('estado', 1)->get();

   return view('asignacion.index', compact(
       'asignacionsGeneral', 
       'asignacionsEstablecimiento', 
       'asignacionsAsistencial', 
       'asignacionsNombramiento',
       'asistencials', 
       'establecimientos', 
       'nombramientos'
   ));
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
        $asignacions = new Asignacion;
        $asignacions->id_establecimiento=$request->input('id_establecimiento');
        $asignacions->id_asistencial=$request->input('id_asistencial');
        $asignacions->id_nombramiento=$request->input('id_nombramiento');
        $asignacions->fecha_inicio=$request->input('fecha_inicio');
        $asignacions->fecha_fin=$request->input('fecha_fin');
        $asignacions->save();
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
        $asignacions = Asignacion::find($id);
        $asignacions->id_establecimiento=$request->input('id_establecimiento');
        $asignacions->id_asistencial=$request->input('id_asistencial');
        $asignacions->id_nombramiento=$request->input('id_nombramiento');
        $asignacions->fecha_inicio=$request->input('fecha_inicio');
        $asignacions->fecha_fin=$request->input('fecha_fin');
        $asignacions->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Asignacion::find($id);
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