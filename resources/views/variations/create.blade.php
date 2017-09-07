@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Create Variation</h1>
  <form method="post" action="{{url('variations')}}">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Variations Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Standard Variation" name="name">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Technique</label>
      <div class="col-sm-10">
        <select class="form-control" name="technique_id">
          @foreach ($techniques as $technique)
            <option value='{{$technique->id}}'>{{$technique->name}}</option>
          @endforeach
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
