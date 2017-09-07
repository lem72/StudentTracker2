@extends('layouts.dashboard.dashboard')
@section('content')
 <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Students</h1>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Belt</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$student['belt']}}</td>
        <td><a href="{{ action('StudentsController@edit', $student['id']) }}" class="btn btn-warning">Edit</a></td>
        <td>
          
        <form action="{{ action('StudentsController@destroy', $student['id'])}}" method="post">
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
        <form action="{{ url('students/create') }}">
          <button type="submit" class="btn btn-primary" style="display:inline;">+ Student</button>
        </form>
        </div>
    </div>
</main>
@endsection
