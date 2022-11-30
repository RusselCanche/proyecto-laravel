<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalRequest;
use Illuminate\Http\Request;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = Personal::where('estado', '1')->get();
        return view('personal.listado', compact('personal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personal.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalRequest $request)
    {
        $data = $request->all();
        Personal::create([
            'paterno' => $data['paterno'],
            'materno' => $data['materno'],
            'nombre' => $data['nombre'],
            'direccion' => $data['direccion'],
            'telefono' => $data['telefono'],
            'correo' => $data['correo'],
            'usuario' => $data['usuario'],
            'password' => $data['password'],
            'id_rol' => 2
        ]);
        return redirect('/personal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personal = Personal::where('id', $id)->first();
        return view('personal.consulta', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personal = Personal::where('id', $id)->first();
        return view('personal.modificar', compact('personal'));
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
            'paterno'=>'required',
            'materno'=>'required',
            'nombre'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'correo' => 'required',
            'usuario' => 'required'
        ]);
        $data = $request->all();
        $personal = Personal::find($id);

        $personal->paterno = $data['paterno'];
        $personal->materno = $data['materno'];
        $personal->nombre = $data['nombre'];
        $personal->direccion = $data['direccion'];
        $personal->telefono = $data['telefono'];
        $personal->correo = $data['correo'];
        $personal->usuario = $data['usuario'];
        //$personal->password = $data['password'];

        $personal->save();
        return redirect('/personal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personal = Personal::find($id);
        $personal->estado = '0';
        $personal->save();
        return redirect('/personal');
    }
}