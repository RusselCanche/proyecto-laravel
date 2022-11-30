<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = "proyecto";
    protected $fillable = [
        'nombre',
        'fecha_entrega',
        'descripcion',
        'id_status'];

    public function status(){
        // id->nombre de la PK de status en tabla status, id_status-> nombre de referencia a status en proyecto (FK)
        return $this->hasOne(Status::class, 'id', 'id_status');
    }
    public function actividades(){
        return $this->hasMany(Actividad_Proyecto::class);
    }
}
