<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $table='aprendiz';
    protected $primaryKey='id_aprendiz';
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
        'FK_ficha'
    ];

    public function fichas(){
        return $this->belongsTo('App\Models\Ficha', 'FK_ficha');
    }
}
