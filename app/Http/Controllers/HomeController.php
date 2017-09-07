<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Student;
use App\Lesson;
use App\Technique;
use App\Variation;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('techniques');
    }

    public function studentProfile($id)
    {
        
        
        // Get Student and include all Lessons, Techniques and Variations
        $students = Student::with(['lesson.technique.variation'])->where('id',$id)->get();





        return view('techniques', compact('students')); 
    }


}
