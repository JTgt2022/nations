<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = "regions";
    protected $primaryKey="region_id";
    use HasFactory;


    public function continente(){
        return $this->belongsTO(Continent::class, 'continent_id');



    }
       //relacion entre region y sus paises 
       //1_M
    public function paises(){
        return $this->hasMany(Country::class, 'region_id');


    }

}