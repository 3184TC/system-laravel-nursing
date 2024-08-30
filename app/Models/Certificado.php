<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $table = 'certificados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'caso',
        'cite',
        'cargo',
        'nombre',
        'estudiante_de',
        'establecimiento',
        'fecha_emision',
        'estado',
    ];
    public $timestamps = true;
}
