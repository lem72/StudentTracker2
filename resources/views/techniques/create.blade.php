@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Create Technique</h1>

  <form method="post" action="{{url('techniques')}}">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Technique Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Trap and Roll" name="name">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Category</label>
      <div class="col-sm-10">
        <select class="form-control" name="category">
          <option value='Mount'>Mount</option>
          <option value='Guard'>Guard</option>
          <option value='Side Mount'>Side Mount</option>
          <option value='Standing'>Standing</option>
          <option value='Half Guard'>Half Guard</option>
          <option value='Back Mount'>Back Mount</option>
          <option value='Leg Locks'>Leg Locks</option>
        </select>
      </div>
    </div>

      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Sub-Category</label>
      <div class="col-sm-10">
        <select class="form-control" name="subcategory">
          <option value='Control'>Control</option>
          <option value='Submissions'>Submissions</option>
          <option value='Sweeps'>Sweeps</option>
          <option value='Escapes'>Escapes</option>
          <option value='Counters'>Counters</option>
          <option value='Passes'>Passes</option>
          <option value='Takedowns'>Takedowns</option>
        </select>
      </div>
    </div>
    
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Level</label>
      <div class="col-sm-10">
        <select class="form-control" name="level">
          <option value='Fundamentals'>Fundamentals</option>
          <option value='Advanced'>Advanced</option>
        </select>
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
