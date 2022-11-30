<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad_Proyecto extends Model
{
    use HasFactory;
    protected $table = "actividad_proyecto";

    protected $fillable = [
        'nombre',
        'fase',
        'tiempo_estimado',
        'fecha_inicio',
        'fecha_termino',
        'id_prioridad',
        'id_status',
        'proyecto_id',
        'id_personal'
    ];
    public function prioridad(){
        // id->nombre de la PK de prioridad en tabla prioridad, id_prioridad-> nombre de referencia a prioridad en proyecto (FK)
        return $this->hasOne(Prioridad::class, 'id', 'id_prioridad');
    }
    public function status(){
        // id->nombre de la PK de status en tabla status, id_status-> nombre de referencia a status en proyecto (FK)
        return $this->hasOne(Status::class, 'id', 'id_status');
    }
    public function proyecto(){
        // id->nombre de la PK de proyecto en tabla proyecto, id_proyecto-> nombre de referencia a proyecto en proyecto (FK)
        return $this->hasOne(Proyecto::class, 'id', 'proyecto_id');
    }
    public function responsable(){
        // id->nombre de la PK de status en tabla status, id_status-> nombre de referencia a status en proyecto (FK)
        return $this->hasOne(Personal::class, 'id', 'id_personal');
    }
}
