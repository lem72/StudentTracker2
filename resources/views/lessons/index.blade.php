@extends('layouts.dashboard.dashboard')
@section('content')
 <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Lessons</h1>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Status</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($lessons as $lesson)
      <tr>
        <td>{{$lesson['id']}}</td>
        <td>{{$lesson['name']}}</td>
        <td>{{$lesson['status']}}</td>
        <td><a href="{{ action('LessonsController@edit', $lesson['id']) }}" class="btn btn-warning">Edit</a></td>
        <td>
          
        <form action="{{ action('LessonsController@destroy', $lesson['id'])}}" method="post">
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
        <form action="{{ url('lessons/create') }}">
          <button type="submit" class="btn btn-primary" style="display:inline;">+ Lesson</button>
        </form>
        </div>
    </div>
</main>
@endsection
