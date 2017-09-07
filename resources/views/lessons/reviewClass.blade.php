@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
<h1>Review Class </h1>
<div class=".container-fluid">
      
      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Lesson Name</label>
        <div class="col-sm-10">
          <p class="form-control-static">@foreach($lessons as $lesson) {{$lesson->name }} </p>
        </div>
      </div>

      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg"># of Students</label>
        <div class="col-sm-10">
          <p class="form-control-static">{{ $lesson->student->count() }}</p>
      
        </div>
      </div> 


<form action="{{ url('lessons/reviewClass/'. $lesson->id) }}" method="POST">
{{ csrf_field() }}
      <div class="form-group row">
        <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Techniques</label>
        <div class="col-sm-10">
                @if (count($lesson->technique) > 0)
          <table class="table">
          <thead>
            <tr>
              <th>Technique</th>
              <th>Variation</th>
              <th >Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lesson->technique as $technique)
            <tr >

              <td><strong>{{ $technique->name }}</strong></td>

              <td>
                
              

              </td>
            </tr>
            @foreach ($technique->variation as $variation)
            <tr >
            <td></td>
              <td class="">{{ $variation->name }}</td>

              <td>
                <input class="form-check-input" type="checkbox" value="{{ $variation->id }}" checked name="variations[]">
              </td>
            </tr>
            @endforeach
            @endforeach
          </tbody>
        </table>
      @endif
        </div>
      </div>




<hr>
  
    <div class="form-group row">
      <div class="col-md-1">
        <a class="btn btn-secondary" href="{{ url('lessons/addStudent/'. $lesson->id) }}" role="button">< Students</a>
      </div>

      <div class="col-md-1">
        
          <button type="submit" class="btn btn-success" style="display:inline;"> Complete Class ></button>
      </div>
    </div>

</div>


    @endforeach
</main>
@endsection
