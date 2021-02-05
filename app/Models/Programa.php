<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    use HasFactory;

    protected $table='programa';
    protected $primaryKey='id_prog';
    protected $fillable =[
        'nomProg',
        'acronimo',
        'estado',
    ];

    public function fichas(){
        return $this->hasMany(Ficha::class);
    }

  
}
