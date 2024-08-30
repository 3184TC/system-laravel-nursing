<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios = User::all();
        return view ('user.index',compact('usuarios'));
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
        $usuarios = new User;
        $usuarios->name=$request->input('nombre');
        $usuarios->email=$request->input('gmail');
        $usuarios->phone=$request->input('telefono');
        $usuarios->created_at=$request->input('creacion');
        $usuarios->save();
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
        $usuarios = User::find($id);
        $usuarios->name=$request->input('nombre');
        $usuarios->email=$request->input('gmail');
        $usuarios->phone=$request->input('telefono');
        $usuarios->created_at=$request->input('creacion');
        $usuarios->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        //$estado = User::find($id);
        //if ($estado->estado == 1 ) {
        //    $estado->estado = 0;
        //    $estado->update();
        //} else {
        //    $estado->estado = 1;
        //    $estado->update();
        //}
        
        return redirect()->back();
    }
}
