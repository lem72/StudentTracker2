@extends('layouts.dashboard.dashboard')
@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Edit Student</h1>

  <form method="post" action="{{action('StudentsController@update', $id)}}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PATCH">
   <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Royce Gracie" name="name" value="{{$student->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Belt</label>
      <div class="col-sm-10">
        <select class="form-control" name="belt">
          <option value='1' @if ($student->belt == 1) selected="selected" @endif>White</option>
          <option value='2' @if ($student->belt == 2) selected="selected" @endif>Blue</option>
          <option value='3' @if ($student->belt == 3) selected="selected" @endif>Purple</option>
          <option value='4' @if ($student->belt == 4) selected="selected" @endif>Brown</option>
          <option value='5' @if ($student->belt == 5) selected="selected" @endif>Black</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Birthdate</label>
      <div class="col-sm-10">
           <input class="form-control form-control-lg" type="date" name="birthdate" value="{{$student->birthdate}}">
      </div>
    </div>


    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</main>
@endsection