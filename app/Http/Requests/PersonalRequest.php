<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'paterno'=>'required',
            'materno'=>'required',
            'nombre'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'correo' => 'required|unique:personal,correo',
            'usuario' => 'required|unique:personal,usuario',
            'password' => 'required|min:8',
        ];
    }
}
