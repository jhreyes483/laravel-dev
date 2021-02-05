<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;

    protected $table='jornada';
    protected $primaryKey='id';
    protected $fillable =[
        'nom_jornada',
    ];

    public function ficha(){
        return $this->hasMany(Ficha::class);
    }
}
