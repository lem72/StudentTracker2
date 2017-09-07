@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Edit Technique</h1>

  <form method="post" action="{{action('TechniquesController@update', $id)}}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PATCH">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Technique Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Trap and Roll" name="name" value="{{$technique->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Category</label>
      <div class="col-sm-10">
        <select class="form-control" name="category">
          <option value='Mount' @if ($technique->category == 'Mount') selected="selected" @endif>Mount</option>
          <option value='Guard' @if ($technique->category == 'Guard') selected="selected" @endif>Guard</option>
          <option value='Side Mount' @if ($technique->category == 'Side Mount') selected="selected" @endif>Side Mount</option>
          <option value='Standing' @if ($technique->category == 'Standing') selected="selected" @endif>Standing</option>
          <option value='Half Guard' @if ($technique->category == 'Half Guard') selected="selected" @endif>Half Guard</option>
          <option value='Back Mount' @if ($technique->category == 'Back Mount') selected="selected" @endif>Back Mount</option>
          <option value='Leg Locks' @if ($technique->category == 'Leg Locks') selected="selected" @endif>Leg Locks</option>
        </select>
      </div>
    </div>

      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Sub-Category</label>
      <div class="col-sm-10">
        <select class="form-control" name="subcategory">
          <option value='Control' @if ($technique->subcategory == 'Control') selected="selected" @endif>Control</option>
          <option value='Submissions' @if ($technique->subcategory == 'Submissions') selected="selected" @endif>Submissions</option>
          <option value='Sweeps' @if ($technique->subcategory == 'Sweeps') selected="selected" @endif>Sweeps</option>
          <option value='Escapes' @if ($technique->subcategory == 'Escapes') selected="selected" @endif>Escapes</option>
          <option value='Counters' @if ($technique->subcategory == 'Counters') selected="selected" @endif>Counters</option>
          <option value='Passes' @if ($technique->subcategory == 'Passes') selected="selected" @endif>Passes</option>
          <option value='Takedowns' @if ($technique->subcategory == 'Takedowns') selected="selected" @endif>Takedowns</option>
        </select>
      </div>
    </div>
    
      <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Level</label>
      <div class="col-sm-10">
        <select class="form-control" name="level">
          <option value='Fundamentals' @if ($technique->level == 'Fundamentals') selected="selected" @endif>Fundamentals</option>
          <option value='Advanced' @if ($technique->level == 'Advanced') selected="selected" @endif>Advanced</option>
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
