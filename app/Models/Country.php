<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla a conectar:
    protected $table = "countries";
    //La clave primaria de esa tabla:
    protected $primaryKey= "country_id";
    //Omitir campos de auditoria:
    public $timestamps = false;
    use HasFactory;

    //relacion entre pais y region
    public function region(){
        return $this->belongsTo(Region::class,'region_id');
    }

    //relacion m a m con idiomas
    public function languages(){
        return $this->belongsToMany(Language::class,'country_languages','country_id','language_id')->withPivot('official');
    }

    //relacion entre pais y contienente 
    public function continente(){
        return $this->belongsToManyThroug(Region::class,Country::class,'region_id','continent_id','region_id','continent_id',);
    }
}

