<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    //table relacionada,
   protected $table = "countries";
   //primery key of the table,
   protected $primaryKey= "country_id";
   //ausencia de campo de fecha,
   public $timestamps= false; 

    use HasFactory;
}
