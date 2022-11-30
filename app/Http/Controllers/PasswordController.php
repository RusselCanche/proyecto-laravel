<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use Illuminate\Http\Request;
use App\Models\Personal;

class PasswordController extends Controller
{
    public function edit($id)
    {
        $personal = Personal::where('id', $id)->first();
        return view('personal.auxiliar.editPassword', compact('personal'));
    }

    public function update(PasswordRequest $request, $id)
    {
        $data = $request->all();
        $personal = Personal::find($id);
        $personal->password = $data['password'];

        $personal->save();
        return redirect('/personal');
    }
}
