<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    
       protected $table = 'presentacion';
       protected $primarykey = 'id';
       protected $fillable = ['id','nombre','estado'];
}
