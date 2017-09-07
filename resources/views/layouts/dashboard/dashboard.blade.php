@include ('layouts.dashboard.header')

   @include ('layouts.dashboard.topnav')

    <div class="container-fluid">
      <div class="row">

       @include ('layouts.dashboard.sidebar')


          @yield('content')

          
        </div>
      </div>
    </div>

@include ('layouts.dashboard.footer')
