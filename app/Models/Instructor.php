<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table='instructor';
    protected $primaryKey='id_instructor';
    protected $fillable =[
        'nom1',
        'nom2',
        'ape1',
        'ape2',
        'estado',
        'correo',
        'fechaNacimiento',
        'genero',
        'foto',
        'tipoDoc',
    ];
}
