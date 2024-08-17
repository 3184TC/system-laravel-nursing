<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    protected $table = 'certificados';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_nombramiento',
        'id_persona',
        'tipo',
        'numero',
        'fecha_emision',
        'fecha_actualizacion',
        'estado',
    ];
    public $timestamps = true;
}
