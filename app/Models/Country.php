<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey="country_id";
    use HasFactory;
//relacion 1:M
public function regiones(){
    //hasMany:Parametros
    //1 Modelo a relacional
    //FK del Modelo actual en el modelo a relacionar 

return $this->belongsTo(Region::class, 'country_id');

}

public function idiomas(){

//belongstomany
//modeloarelacionar
    return $this->belongsToMany(Languages::class, 'country_languages','country_id','language_id');



}

}