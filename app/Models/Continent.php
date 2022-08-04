<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
   //table relacionada,
   protected $table = "continents";
   //primery key of the table,
   protected $primaryKey= "continent_id";
   //ausencia de campo de fecha,
   public $timestamps= false; 

   use HasFactory;




} 
