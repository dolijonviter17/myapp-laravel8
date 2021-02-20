<div class="sidebar" data-color="orange">
  
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>

        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Laravel 8
        </a>
    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">        
        <li class="active ">
            <a href="{{route('dashboard')}}">

                  <i class="now-ui-icons design_app"></i>

                <p>My Question</p>
            </a>
        </li>

        <li>
            <a href="{{ route('questions.index') }}">

                  <i class="now-ui-icons education_atom"></i>

                <p>Questions</p>
            </a>
        </li>

        {{-- <li>
            <a href="../map.html">

                  <i class="now-ui-icons location_map-big"></i>

                <p>Maps</p>
            </a>
        </li> --}}

        
        <form action="{{route('logout')}}" method="POST">
          @csrf
        <li class="active-pro">
          
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();">
              
                  <i class="now-ui-icons media-1_button-power"></i>

                <p>Logout</p>
            </a>
         
        </li>
      </form>
      </ul>
    </div>
  </div>