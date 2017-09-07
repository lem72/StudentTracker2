<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['isAdmin', 'auth'])->group(function () {
    
    // Add Techniques to Lesson

    Route::get('lessons/addTechnique/{lesson_id}', 'LessonTechniqueController@addTechnique');

    Route::post('lessons/addTechnique/{lesson_id}', 'LessonTechniqueController@addNewTechnique')->name('addNewTechnique');
	
	Route::delete('lessons/addTechnique/{lesson_id}/{technique_id}', 'LessonTechniqueController@destroyTechnique');

	
	// Add Students to Lessons

	Route::get('lessons/addStudent/{lesson_id}', 'LessonTechniqueController@addStudent');

	Route::post('lessons/addStudent/{lesson_id}', 'LessonTechniqueController@addNewStudent');

	Route::delete('lessons/addStudent/{lesson_id}/{student_id}', 'LessonTechniqueController@destroyStudent');


	//Review Class + Complete them
	Route::get('lessons/reviewClass/{lesson_id}', 'LessonTechniqueController@reviewClass');
	Route::post('lessons/reviewClass/{lesson_id}', 'LessonTechniqueController@completeClass');

	//Display Technique Sheets + Student Profiles
	Route::get('profile/{student_id}', 'HomeController@studentProfile');

	
    
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::Resource('students', 'StudentsController', ['middleware' => ['isAdmin', 'auth']]);

Route::resource('techniques', 'TechniquesController', ['middleware'=>['isAdmin', 'auth']]);

Route::resource('variations', 'VariationsController', ['middleware'=>['isAdmin', 'auth']]);

Route::resource('lessons', 'LessonsController', ['middleware'=>['isAdmin', 'auth']]);



	


