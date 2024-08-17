<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'estado',
    ];
    public $timestamps = true;
}
