<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $table='ficha';
    protected $primaryKey='id_ficha';
    protected $fillable =[
        'No_ficha',
        'descrip',
        'estado',
        'FK_jornada',
        'FK_prog',
    ];

    public function jornada(){
        return $this->belongsTo('App\Models\Jornada', 'FK_jornada');
    }

    public function programa(){
        return $this->belongsTo('App\Models\Programa', 'FK_prog');
    }

    public function aprendiz(){
        return $this->hasMany(Ficha::class);
    }
   




}
#
