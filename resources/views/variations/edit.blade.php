@extends('layouts.dashboard.dashboard')

@section('content')

<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Edit Variation</h1>
  <form method="post" action="{{action('VariationsController@update', $id)}}">
  {{csrf_field()}}
  <input name="_method" type="hidden" value="PATCH">
    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Variation Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Standard" name="name" value="{{$variations->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Technique</label>
      <div class="col-sm-10">
        <select class="form-control" name="technique_id">
          @foreach ($techniques as $technique)
            <option value='{{$technique->id}}' @if ($technique->id == $variations->technique_id) selected="selected" @endif>{{$technique->name}}</option>
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
