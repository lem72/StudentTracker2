@extends('layouts.dashboard.dashboard')
@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Variations</h1>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Technique</th>
        <th>Variation</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($variations as $variation)
      <tr>
        <td>{{$variation['id']}}</td>
        <td>{{$variation->technique->name}}</td>
        <td>{{$variation['name']}}</td>

        <td><a href="{{ action('VariationsController@edit', $variation['id']) }}" class="btn btn-warning">Edit</a></td>
        <td>
          
        <form action="{{ action('VariationsController@destroy', $variation['id'])}}" method="post">
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
        <form action="{{ url('variations/create') }}">
          <button type="submit" class="btn btn-primary" style="display:inline;">+ Variation</button>
        </form>
        </div>
    </div>

</main>
@endsection
