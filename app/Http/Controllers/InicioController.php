<?php

namespace App\Http\Controllers;

use App\Models\Actividad_Proyecto;
use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function index(){
        if(Auth::check()){
            $actividades = Actividad_Proyecto::where('id_personal',auth()->user()->id)->orderBy('actividad_proyecto.id_prioridad','asc')->orderBy('actividad_proyecto.id_status','asc')->get();
            return view('inicio.index', compact('actividades'));
        }
        return view('inicio.index');
    }
}