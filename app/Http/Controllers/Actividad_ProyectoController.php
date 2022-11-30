<?php

namespace App\Http\Controllers;

use App\Models\Actividad_Proyecto;
use App\Models\Prioridad;
use App\Models\Proyecto;
use App\Models\Personal;
use App\Models\Status;
use Illuminate\Http\Request;

class Actividad_ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // AGREGAR ORDER BY PRIORIDAD ASC
        $proyectos = Proyecto::all();
        $actividades = Actividad_Proyecto::where('estado', 1)->orderBy('actividad_proyecto.id_prioridad','asc')->orderBy('actividad_proyecto.id_status','asc')->get();
        return view('actividades.listado', compact('proyectos', 'actividades'));
    }
    
    public function indexProyecto(Proyecto $proyecto){
        // AGREGAR ORDER BY PRIORIDAD ASC
        $proyectos = Proyecto::all();
        $actividades = $proyecto->actividades()->where('estado', 1)->orderBy('actividad_proyecto.id_prioridad','asc')->orderBy('actividad_proyecto.id_status','asc')->get();
        //echo $proyecto;
        //dd($actividades);
        return view('actividades.listado', compact('proyectos', 'actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prioridades = Prioridad::all();
        $proyectos = Proyecto::where('id_status', '!=', 3)->get();
        $personal = Personal::where('estado', 1)->get();
        return view('actividades.nuevo', compact('prioridades', 'proyectos', 'personal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'fase' => 'required',
            'tiempoestimado' => 'required',
            'finicio' => 'required',
            'ffin' => 'required',
            'id_prioridad' => 'required',
            'id_proyecto' => 'required',
            'id_personal' => 'required',
        ]);
        $data = $request->all();
        Actividad_Proyecto::create([
            'nombre' => $data['nombre'],
            'fase' => $data['fase'],
            'tiempo_estimado' => $data['tiempoestimado'],
            'fecha_inicio' => $data['finicio'],
            'fecha_termino' => $data['ffin'],
            'estado' => 1,
            'id_prioridad' => $data['id_prioridad'],
            'id_status' => 1,
            'proyecto_id' => $data['id_proyecto'],
            'id_personal' => $data['id_personal']
        ]);
        return redirect("/actividades");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividad = Actividad_Proyecto::where('id', $id)->first();
        return view('actividades.consulta', compact('actividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividad = Actividad_Proyecto::where('id', $id)->first();
        $prioridades = Prioridad::all();
        // Proyecto no modificable
        $personal = Personal::where('estado', 1)->get();
        $estados = Status::all(); 
        return view('actividades.modificar', compact('actividad', 'prioridades', 'personal', 'estados'));
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
        //pendiente select
        $validated = $request->validate([
            'nombre' => 'required',
            'fase' => 'required',
            'tiempoestimado' => 'required',
            'finicio' => 'required',
            'ffin' => 'required'
        ]);

        $data = $request->all();
        $actividad = Actividad_Proyecto::find($id);

        $actividad->nombre = $data['nombre'];
        $actividad->fase = $data['fase'];
        $actividad->tiempo_estimado = $data['tiempoestimado'];
        $actividad->fecha_inicio = $data['finicio'];
        $actividad->fecha_termino = $data['ffin'];
        $actividad->id_prioridad = $data['id_prioridad'];
        $actividad->id_status = $data['id_status'];
        $actividad->id_personal = $data['id_personal'];

        $actividad->save();
        return redirect('/actividades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad  = Actividad_Proyecto::find($id);
        $actividad->estado = "0";
        $actividad->save();

        return redirect('/actividades');
    }
}
