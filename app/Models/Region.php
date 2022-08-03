<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //La tabla a conectar:
    protected $table = "regions";
    //La clave primaria de esa tabla:
    protected $primaryKey= "region_id";
    //Omitir campos de auditoria:
    public $timestamps = false;
    use HasFactory;

    //relacion entre region y paises
    public function paises(){
        return $this->hasMany(Country::class,'region_id');
    }

    //relacion entre region y continente
    public function contiente(){
        return $this->belongsTo(Continent::class,'continent_id');
    }
}
