@extends('layouts.dashboard.dashboard')
@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Techniques</h1>


    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Sub-Category</th>
        <th>Level</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($techniques as $technique)
      <tr>
        <td>{{$technique['id']}}</td>
        <td>{{$technique['name']}}</td>
        <td>{{$technique['category']}}</td>
        <td>{{$technique['subcategory']}}</td>
        <td>{{$technique['level']}}</td>
        <td><a href="{{ action('TechniquesController@edit', $technique['id']) }}" class="btn btn-warning">Edit</a></td>
        <td>
          
        <form action="{{ action('TechniquesController@destroy', $technique['id'])}}" method="post">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <div class="form-group row">
      <div class="col-md-10">
        <form action="{{ url('techniques/create') }}">
          <button type="submit" class="btn btn-primary" style="display:inline;">+ Technique</button>
        </form>
        </div>
    </div>
</main>
@endsection
