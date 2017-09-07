@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Add Students to Lesson </h1>
<div class=".container-fluid">
      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Lesson Name</label>
        <div class="col-sm-10">
          <p class="form-control-static">@foreach($lessons as $lesson) {{$lesson->name }} </p>
        </div>
      </div>

@if (count($lesson->student) > 0)
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Student</th>
        <th >Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lesson->student as $student)
      <tr>

        <td>{{$student->name}}</td>
        <td>
          
        <form action="{{ action('LessonTechniqueController@destroyStudent', ['lesson_id'=>$lesson['id'],'student_id'=>$student->id]) }}" method="post">
            {{ csrf_field() }}
             <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <hr>
@endif

   <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Add Student</label>
      <div class="col-sm-3">
        <form action="{{action('LessonTechniqueController@addNewStudent', $lesson['id'])}}" method="post">
        {{ csrf_field() }}
        <select class="form-control" name="student_id">
          @foreach ($students as $student) <option value='{{$student->id}}'>{{$student->name}}</option> @endforeach
        </select> 
      </div>

       <div class="col-sm-3">
        <button type="submit" class="btn btn-primary" style="display:inline;">+ Student</button>
       </div> 
        </form>

    </div>
<hr>
  
    <div class="form-group row">
      <div class="col-md-1">
      <a class="btn btn-secondary" href="{{ url('lessons/addTechnique/'. $lesson->id) }}" role="button">< Techniques</a>
      </div>

      <div class="col-md-1">
        <form action="{{ url('lessons/reviewClass/'. $lesson->id) }}">
          <button type="submit" class="btn btn-success" style="display:inline;"> Review Class ></button>
        </form>
      </div>
    </div>

</div>


    @endforeach
</main>
@endsection
