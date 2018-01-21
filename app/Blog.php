<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //table name
    protected $table = 'students_blog';
    //Primary key
    public $primaryKey = 'id';
    
    //Timestamp
    public $timestamp = true;

    public function user(){
        return $this->belongsTo('App\User', 'student_id');
    }
}
