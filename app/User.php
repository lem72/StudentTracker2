<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Student;
use Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public static function getStudents(){
        return Student::where('user_id', Auth::id())->orderBy('name', 'asc')->get();
    }


}
