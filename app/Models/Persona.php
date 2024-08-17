<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
        'apellido',
        'genero',
        'cargo',
        'ci',
        'celular',
        'estado',
    ];
    public $timestamps = true;
}
