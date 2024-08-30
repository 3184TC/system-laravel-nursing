<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $certificados = Certificado::where('estado', 1)->get();
        return view('certificado.index', compact('certificados'));
        
    }
    public function generarCertificado(Request $request)
    {
        
        $validatedData = $request->validate([
            'caso' => 'required|string',
            'cite' => 'required|string',
            'nombre' => 'required|string',
            'cargo' => 'required|string',
            'estudiante_de' => 'required|string',
            'establecimiento' => 'required|string',
            'fecha_emision'  => 'required|string',
            // Otros campos aquí
        ]);
    
        // Suponiendo que tienes un modelo Certificado
        $certificado = Certificado::create($validatedData);
    
        // Generar el PDF
        $pdf = PDF::loadView('certificado.pdf', ['certificado' => $certificado]);
    
        // Guardar el PDF si es necesario
        $pdfPath = storage_path('app/public/certificados/' . $certificado->id . '.pdf');
        $pdf->save($pdfPath);
    
        // Redirigir al PDF generado
        return $pdf->stream('certificado_' . $certificado->id . '.pdf');
    }
    

    public function pdf(){

        $certificados=Certificado::all();
        $pdf = Pdf::loadView('certificado.pdf', \compact('certificados'));
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
        $certificados = new Certificado;
        $certificados->caso=$request->input('caso');
        $certificados->cite=$request->input('cite');
        $certificados->cargo=$request->input('cargo');
        $certificados->nombre=$request->input('nombre');
        $certificados->estudiante_de=$request->input('estudiante_de');
        $certificados->establecimiento=$request->input('establecimiento');
        $certificados->fecha_emision=$request->input('fecha_emision');
        
        $certificados->save();
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
        $certificados = Certificado::find($id);
        $certificados->caso=$request->input('caso');
        $certificados->cite=$request->input('cite');
        $certificados->cargo=$request->input('cargo');
        $certificados->nombre=$request->input('nombre');
        $certificados->estudiante_de=$request->input('estudiante_de');
        $certificados->establecimiento=$request->input('establecimiento');
        $certificados->fecha_emision=$request->input('fecha_emision');
        $certificados->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estado = Certificado::find($id);
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
