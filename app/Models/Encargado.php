<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    protected $table = 'encargados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_persona',
        'id_establecimiento',
        'cargo',
        'estado',
    ];
    public $timestamps = true;
}
