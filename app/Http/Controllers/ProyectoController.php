<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProyectoRequest;
use Illuminate\Http\Request;
use App\Models\Proyecto;
use App\Models\Status;

class ProyectoController extends Controller
{
    // UN PROYECTO TIENE UN SOLO STATUS

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // AGREGAR ORDER BY PRIORIDAD ASC
        $proyectos = Proyecto::all();
        return view('proyecto.listado', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
        $data = $request->all();
        Proyecto::create([
            // Base     |   campos HTML
            'nombre' => $data['nombre'],
            'fecha_entrega' => $data['fechaentrega'],
            'descripcion' => $data['descripcion'],
            'id_status' => 1
        ]);
        return redirect('/proyecto');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::where('id', $id)->first();
        return view('proyecto.consulta', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::where('id', $id)->first();
        $estados = Status::all();                                         // Status::orderBy('id')->get();
        return view('proyecto.modificar', compact('proyecto', 'estados'));
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
        $validated = $request->validate([
            'nombre' => 'required',
            'fechaentrega' => 'required',
            'descripcion' => 'required|min:10'
        ]);
        $data = $request->all();
        $proyecto = Proyecto::find($id);

        $proyecto->nombre = $data['nombre'];
        $proyecto->fecha_entrega = $data['fechaentrega'];
        $proyecto->descripcion = $data['descripcion'];
        $proyecto->id_status = $data['id_status'];

        $proyecto->save();
        return redirect('/proyecto');
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
    }
}
