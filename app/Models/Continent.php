<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //La tabla a conectar:
    protected $table = "continents";
    //La clave primaria de esa tabla:
    protected $primaryKey= "continent_id";
    //Omitir campos de auditoria:
    public $timestamps = false;
    use HasFactory;
}
