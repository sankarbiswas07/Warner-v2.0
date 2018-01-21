<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor_Reg extends Model
{
         //table name
         protected $table = 'mentors';
         //Primary key
         public $primaryKey = 'id';
         //Timestamp
         public $timestamp = true;

           public function mentor_reg(){
         return $this->belongsTo('App\Mentor_Reg');
     }
     
}
