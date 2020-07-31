<!doctype html>
<html lang="en">
  <head>
    <title>Milky Chew &mdash; Tasty treat for dogs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700, 900|Vollkorn:400i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('listed/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('listed/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('listed/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('listed/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('listed/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('listed/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('listed/css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('listed/fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('listed/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('listed/css/style.css') }}">

     <!-- cdn for font awesome logout sign -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
  </head>
      <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" id="home-section">

        
       
      <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner" >

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="/milkyChew/public/" class="h2 mb-0"><strong>Dog</strong>Life<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/milkyChew/public/" class="nav-link">Home</a></li>
                
                                    <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="index" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header><br><br><br>
 <body>
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>  
  @endif
 @yield('content')
</body> 

    <br><br><br><br>

<footer class="site-footer">
      <div class="container">
        <div class="row pt-1 mt-1 text-center">
          <div class="col-md-12">
            <div class="border-top pt-1">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->
    </body>

  <script src="{{ asset('listed/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('listed/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('listed/js/popper.min.js') }}"></script>
  <script src="{{ asset('listed/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('listed/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('listed/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('listed/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('listed/js/aos.js') }}"></script>
  <script src="{{ asset('listed/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('listed/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('listed/js/isotope.pkgd.min.js') }}"></script>

  
  <script src="{{ asset('js/main.js') }}"></script>

  
  </body>
</html>
