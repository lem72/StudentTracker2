<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
     protected $fillable = ['name','status'];


     public function technique()
	     {
	     	return $this->belongsToMany(Technique::class);
	     }

     public function student()
	     {
	     	return $this->belongsToMany(Student::class);
	     }

	  public function variation()
	  {
	  	return $this->belongsToMany(Variation::class);
	  }
}
