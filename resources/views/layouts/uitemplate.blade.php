<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    {{-- CSS  --}}
    @yield('style');  
    <link rel="stylesheet" href="{{ asset('css/uinow.css') }}">
    <!-- Material Kit CSS -->
    <link href="{{ asset('nowui/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('nowui/assets/css/now-ui-dashboard.css')}}" rel="stylesheet" />

  </head>
  <body>
    <div class="wrapper">

      @include('layouts._partial.sidebar')

    <div class="main-panel" id="main-panel">
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                      <i class="now-ui-icons media-2_sound-wave"></i>

                      <p>
                        <span class="d-lg-none d-md-block">Stats</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="now-ui-icons location_world"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Some Actions</span>
                      </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                      <i class="now-ui-icons users_single-02"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Account</span>
                      </p>
                    </a>
                    
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          {{-- end navbar --}}
          <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
        @yield('content')
        </div>

        {{-- Footer --}}
        <footer class="footer">
            <div class="container-fluid">
              <nav>
                <ul>
                  <li>
                    <a href="https://www.creative-tim.com">
                      Creative Tim
                    </a>
                  </li>
                  <li>
                    <a href="http://presentation.creative-tim.com">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com">
                      Blog
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright" id="copyright">
                &copy;
                <script>
                  document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Designed by
                <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
              </div>
            </div>
          </footer>
    </div>

    
    
  </div>
</body>
  <!--   Core JS Files   -->
  <script src="{{asset('nowui/assets/js/core/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{asset('nowui/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('nowui/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('nowui/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>

  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('nowui/assets/js/now-ui-dashboard.js')}}" type="text/javascript"></script>
</html>