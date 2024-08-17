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
        'id_nombramiento',
        'id_gestion',
        'fecha_inicio',
        'fecha_fin',
        'estado',
    ];
    public $timestamps = true;
}
