<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
     //table name
     protected $table = 'feed_form';
     //Primary key
     public $primaryKey = 'id';
     //Primary key
     public $foreignKey = 'mentor_id';
     //Timestamp
     public $timestamp = true;
 
     public function user(){
         return $this->belongsTo('App\User');
     }
     
}
