@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Create Student</h1>

  <form method="post" action="{{url('students')}}">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Royce Gracie" name="name">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Belt</label>
      <div class="col-sm-10">
        <select class="form-control" name="belt">
          <option value='1'>White</option>
          <option value='2'>Blue</option>
          <option value='3'>Purple</option>
          <option value='4'>Brown</option>
          <option value='5'>Black</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Birthdate</label>
      <div class="col-sm-10">
           <input class="form-control form-control-lg" type="date" name="birthdate">
      </div>
    </div>



    <div class="form-group row">
      <div class="col-md-2"></div>
      <input type="submit" class="btn btn-primary">
    </div>
    {{csrf_field()}}
  </form>
</main>
@endsection
