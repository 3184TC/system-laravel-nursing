<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencial extends Model
{
    protected $table = 'asistencials'; 
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'genero',
        'cargo',
        'ci',
        'celular',
        'estado',
    ];

    // Si quieres habilitar los timestamps (created_at y updated_at)
    public $timestamps = true;


}