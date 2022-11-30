<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/inicio');
        }
        return view('auth.registrar');
    }

    public function register(RegistroRequest $request){
        $data=$request->all();

        $personal = Personal::create(
            [
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

        return redirect('/login')->with('success', 'Cuenta creada exitosamente');
    }
}
