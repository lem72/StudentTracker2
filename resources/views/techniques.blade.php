@extends('layouts.dashboard.dashboard')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

@foreach ($students as $student)
  <h1>{{ $student->name }}</h1>

 @endforeach 





 <h2>Fundamentals</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Mount</th>
                  <th>#</th>
                  <th>Guard</th>
                  <th>#</th>
                  <th>Side Mount</th>
                  <th>#</th>
                  <th>Standing</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i>Sweeps</i><br><strong>1. Trap and Roll</strong><br>- Standard<br>- Headlock<br>- Punch Block</td>
                  <td><br>3<br>4<br>3</td>
                  <td><strong>1. Punch Block Stage 1-4</strong><br>- Stage 1<br>- Stage 2<br>- Stage 3<br>- Stage 4</td>
                  <td><br>1<br>1<br>1<br>1</td>
                  <td><strong>1. Positional Control</strong><br>- Roll Prevention<br>- Guard Prevention<br>- Mount Transition</td>
                  <td><br>1<br>1<br>1</td>
                  <td><strong>1. Clinch</strong><br>- Aggressive<br>- Conservative</td>
                  <td><br>1<br>1</td>
                </tr>
               
              </tbody>
            </table>
          </div>
         </main>
@endsection