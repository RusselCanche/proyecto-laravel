<?php

namespace App\Http\Controllers;

use App\Http\Requests\RolRequest;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::where('estado', '=', "1")->get();
        return view('rol.listado', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('rol.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolRequest $request)
    {
        $data = $request->all();
        Rol::create([
            'rol' => $data['rol'],
            'estado' => 1
        ]);
        return redirect('/rol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::where('id', '=', $id)->first();
        return view('rol.consulta', compact('rol'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = Rol::where('id', '=', $id)->first();
        return view('rol.modificar', compact('rol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
            'rol'=>'required'
        ]);
        $data = $request->all();

        $rol  = Rol::find($id);
        $rol->rol = $data['rol'];
        $rol->save();

        return redirect('/rol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rol  = Rol::find($id);
        $rol->estado = "0";
        $rol->save();

        return redirect('/rol');
    }
}
