<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','belt','birthdate','user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }


     public function lesson()
     {
     	return $this->belongsToMany(Lesson::class);
     }
}
