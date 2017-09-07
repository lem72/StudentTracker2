<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $fillable = ['name','technique_id'];

    public function technique()
    {
    	return $this->belongsTo(Technique::class, 'technique_id');
    }

    public function lesson()
    {
    	return $this->belongsTo(Lesson::class, 'lesson_id');
    }
}
