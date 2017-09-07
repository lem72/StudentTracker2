<div class="container-fluid">
      <div class="row">
        
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">

          <ul class="nav nav-pills flex-column">
          @foreach ($students as $student)
            <li class="nav-item">
              <a class="nav-link" href="{{ url('profile/'. $student->id) }}">{{ $student->name }}</a>
            </li>
           @endforeach 
          </ul>

          @if (Gate::allows('isAdmin'))
    

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('students')}}">Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('techniques')}}">Techniques</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('variations')}}">Variations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('lessons')}}">Lessons</a>
            </li>
          </ul>

          @endif

        </nav>