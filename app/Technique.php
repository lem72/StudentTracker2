<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{

    protected $fillable = ['name','category','subcategory','level'];

    public function variation()
    {
    	return $this->hasMany(Variation::class);
    }

    public function lesson()
    {
    	return $this->belongsToMany(Lesson::class);
    }


}
