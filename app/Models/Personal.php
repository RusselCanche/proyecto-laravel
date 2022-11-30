<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Personal extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "personal";

    protected $fillable = [
        'paterno',
        'materno',
        'nombre',
        'direccion',
        'telefono',
        'correo',
        'usuario',
        'password',
        'id_rol'
    ];

    protected $hidden = [
        'password'
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }
}
