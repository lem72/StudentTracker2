<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Technique;
use App\Student;
use Illuminate\Support\Facades\Gate;

class LessonTechniqueController extends Controller
{
    public function addTechnique($id)
    {
		$techniques = Technique::all();
        $lessons = Lesson::with('technique')->where('id',$id)->get();
        return view('lessons.addTechnique', compact('lessons', 'techniques'));
    }

    public function destroyTechnique($lesson_id, $technique_id)
    {
        $lesson = Lesson::find($lesson_id);
        $lesson->technique()->detach($technique_id);


        return redirect('/lessons/addTechnique/' . $lesson_id);
       
    }


    public function addNewTechnique($lesson_id, Request $technique)
    {
        $lesson = Lesson::find($lesson_id);
        $technique_id = $technique->get('technique_id');
        $lesson->technique()->attach($technique_id);


        return redirect('/lessons/addTechnique/' . $lesson_id);
       
    }

    public function addStudent($id)
    {
		$students = Student::all();
		$techniques = Technique::all();
        $lessons = Lesson::with(['technique', 'student'])->where('id',$id)->get();
        return view('lessons.addStudent', compact('lessons', 'techniques', 'students'));
    }


    public function destroyStudent($lesson_id, $student_id)
    {
        $lesson = Lesson::find($lesson_id);
        $lesson->student()->detach($student_id);


        return redirect('/lessons/addStudent/' . $lesson_id);
       
    }

	public function addNewStudent($lesson_id, Request $student)
    {
        $lesson = Lesson::find($lesson_id);
        $student_id = $student->get('student_id');
        $lesson->student()->attach($student_id);


        return redirect('/lessons/addStudent/' . $lesson_id);
       
    }

    public function reviewClass($id)
    {
    	$lessons = Lesson::with('technique.variation', 'student')->where('id',$id)->get();
    	return view('lessons.reviewClass', compact('lessons'));
    }

    public function completeClass($lesson_id, Request $request)
    {	

    	$lesson = Lesson::find($lesson_id);

    	foreach($request->variations as $variation) {
    		$lesson->variation()->attach($variation);

    	}

    	$lessons = Lesson::all()->toArray();
        
        return view('lessons.index', compact('lessons'));

    }


}
