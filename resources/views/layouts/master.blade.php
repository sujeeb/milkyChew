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
            <h1 class="mb-0 site-logo"><a href="#" class="h2 mb-0"><strong>Dog</strong>Life<span class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>

                @if(Auth::check())
                  @if (Auth::user()->isAdmin())
                <li><a href="{{ url("/feedback/contact") }}" class="nav-link">Admin</a></li>
                  @endif
                @endif

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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a href="{{ url('user/'.Auth::user()->id) }}" class="nav-link">Profile</a>
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
      
    </header>

<body>
  @yield('content')
</body>    


<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  <li><a href="#trainers-section" class="smoothscroll">Trainers</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3 social-link"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3 social-link"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3 social-link"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3 social-link"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
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