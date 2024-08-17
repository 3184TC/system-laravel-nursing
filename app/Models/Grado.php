<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_persona',
        'nivel',
        'especialidad',
        'estado',
    ];
    public $timestamps = true;
}
