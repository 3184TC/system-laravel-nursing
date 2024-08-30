<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'solicituds';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cite',
        'dirigido',
        'cargo',
        'establecimiento',
        'ref',
        'fecha_emision',
        'estado',
    ];
    public $timestamps = true;

   

}
