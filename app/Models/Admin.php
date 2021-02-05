<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected  $table = 'admin';
    protected $primaryKey='id_admin';
    protected $fillable =[
        'nom1',
        'nom2',
        'ape1',
        'ape2',
        'estado',
        'fechaNacimiento',
        'genero',
        'foto',
        'password',
        'tipoDoc',
    ];

    protected $hidden=[
        'password'
    ];
}
