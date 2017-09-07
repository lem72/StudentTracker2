@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Add Techniques to Lesson </h1>
<div class=".container-fluid">
      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Lesson Name</label>
        <div class="col-sm-10">
          <p class="form-control-static">@foreach($lessons as $lesson) {{$lesson->name }} </p>
        </div>
      </div>

@if (count($lesson->technique) > 0)
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Technique</th>
        <th >Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lesson->technique as $technique)
      <tr>

        <td>{{$technique->name}}</td>
        <td>
          
        <form action="{{ action('LessonTechniqueController@destroyTechnique', ['lesson_id'=>$lesson['id'],'technique_id'=>$technique['id']]) }}" method="post">
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
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Add Technique</label>
      <div class="col-sm-3">
        <form action="{{action('LessonTechniqueController@addNewTechnique', $lesson['id'])}}" method="post">
        {{ csrf_field() }}
        <select class="form-control" name="technique_id">
          @foreach ($techniques as $technique) <option value='{{$technique->id}}'>{{$technique->name}}</option> @endforeach
        </select> 
      </div>

       <div class="col-sm-3">
        <button type="submit" class="btn btn-primary" style="display:inline;">+ Technique</button>
       </div> 
        </form>

    </div>
<hr>
  
    <div class="form-group row ">
      <div class="col-md-1">
      <a class="btn btn-secondary" href="{{ url('lessons/addStudent/'. $lesson->id) }}" role="button">< Edit Lesson</a>
        
      </div>

      <div class="col-md-1">
        <form action="{{ url('lessons/addStudent/'. $lesson->id) }}">
          <button type="submit" class="btn btn-success" style="display:inline;">Students ></button>
        </form>
      </div>
    </div>

</div>


    @endforeach
</main>
@endsection
