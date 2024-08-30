<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'asignacions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_establecimiento',
        'id_asistencial',
        'id_nombramiento',
        'fecha_inicio',
        'fecha_fin',
        'estado',
    ];
    public $timestamps = true;
    //para ver el campo especialidad de la tabla grados en la tabla asistencial
    public function Asistencial(){
        return $this->hasOne(Asistencial::class,'id','id_asistencial');
    }

    //para que se ver el campo nombre de la tabla persona en la tabla asistencial
    public function Establecimiento(){
        return $this->hasOne(Establecimiento::class,'id','id_establecimiento');
    }

    //para que se ver el campo nombre de la tabla persona en la tabla asistencial
    public function Nombramiento(){
        return $this->hasOne(Nombramiento::class,'id','id_nombramiento');
    }

    
}
