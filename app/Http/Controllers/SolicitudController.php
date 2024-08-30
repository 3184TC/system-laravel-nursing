<?php

namespace App\Http\Controllers;

use App\Models\Nombramiento;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $solicituds = Solicitud::where('estado', 1)->get();
        return view('solicitud.index', compact('solicituds'));
        
    }
    public function generarSolicitud(Request $request)
    {
        $validatedData = $request->validate([
            'cite' => 'required|string',
            'dirigido' => 'required|string',
            'cargo' => 'required|string',
            'establecimiento' => 'required|string',
            'ref' => 'required|string',
            'fecha_emision'  => 'required|string',
            // Otros campos aquí
        ]);
        //--------------------------llamado datos de otra tabla
            // Crear la solicitud
        $solicitud = Solicitud::create($validatedData);

        // Obtener los datos relacionados de la tabla 'Nombraminetos'
        $nombramientos = Nombramiento::all();

        // Generar el PDF y pasar las variables a la vista
        $pdf = PDF::loadView('solicitud.pdf', ['solicitud' => $solicitud, 'nombramientos' => $nombramientos]);

        // Guardar el PDF si es necesario
        $pdfPath = storage_path('app/public/certificados/' . $solicitud->id . '.pdf');
        $pdf->save($pdfPath);

        // Redirigir al PDF generado
        return $pdf->stream('solicitud_' . $solicitud->id . '.pdf');
    }
        
        // Generar el PDF
       
    /**
     * Show the form for creating a new resource.
     * 
    
     */
    //MOSTRAER PDF
     public function mostrar($id)
     {
        $solicituds = Solicitud::find($id);
        $nombramientos = Nombramiento::find($id);
        // Redirigir al PDF generado
       
        return view('solicitud.pdf',['Msolicitud'=>$solicituds],['nombramiento'=>$nombramientos,]);

        
        

     }
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
        $solicituds = new Solicitud;
        $solicituds->cite=$request->input('cite');
        $solicituds->dirigido=$request->input('dirigido');
        $solicituds->cargo=$request->input('cargo');
        $solicituds->establecimiento=$request->input('establecimiento');
        $solicituds->ref=$request->input('ref');
        $solicituds->fecha_emision=$request->input('fecha_emision');
        
        $solicituds->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    // Obtener la solicitud por su ID
    $solicitud = Solicitud::findOrFail($id);
    
    // Obtener los datos de la tabla 'nombramientos' (puedes filtrar según sea necesario)
    $nombramientos = Nombramiento::all(); // Ajusta esta consulta a tus necesidades

    // Pasar los datos a la vista
    return view('solicitud.show', compact('solicitud', 'nombramientos'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //actUALIZAR
        $solicituds = Solicitud::find($id);
        $solicituds->cite=$request->input('cite');
        $solicituds->dirigido=$request->input('dirigido');
        $solicituds->cargo=$request->input('cargo');
        $solicituds->establecimiento=$request->input('establecimiento');
        $solicituds->ref=$request->input('ref');
        $solicituds->fecha_emision=$request->input('fecha_emision');
        $solicituds->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Solicitud::find($id);
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
