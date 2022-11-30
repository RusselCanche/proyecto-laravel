<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/inicio');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credencials=$request->getCredencials();
        if(!Auth::validate($credencials)){
            return redirect()->to('/login')->withErrors('Usuario y/o contraseña incorrecto(s)');
        }
        $usuario=Auth::getProvider()->retrieveByCredentials($credencials);
        Auth::login($usuario);
        return $this->authenticated($request, $usuario);
    }
    public function authenticated(Request $request, $usuario){
        return redirect('/inicio');
    }
}
