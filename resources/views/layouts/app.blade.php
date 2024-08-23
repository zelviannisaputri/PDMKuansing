<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') &amp; IT Solution</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Corporate & IT Solutions">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
        <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/animate-css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/fonts/Pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
      </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="top-bar bg-dark py-2 py-md-0" id="top-bar">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                  <div class="top-bar-left text-white text-md-left text-sm-center">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="ml-2">2 No, Jl. Ahmad Yani, Balikpapan City, East Kalimantan</span>
                  </div>
                </div>

                <div class="col-lg-4 ml-lg-auto col-md-6">
                  <ul class="list-inline list-unstyled header-socials text-md-right text-sm-center">
                    <li class="list-inline-item"><a href="#!"> <i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#!"> <i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#!"> <i class="fab fa-pinterest-p"></i></a></li>
                    <li class="list-inline-item"><a href="#!"> <i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="logo-bar d-none d-md-block d-lg-block bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-2">
                  <div class="logo d-none d-lg-block">
                    <!-- Brand -->
                    <a class="navbar-brand js-scroll-trigger" href="index.html">
                      <h2 class="mb-0">Mahakam</h2>
                    </a>
                  </div>
                </div>

                <div class="col-lg-8 justify-content-end ml-lg-auto d-flex col-12 col-md-12 justify-content-md-center">
                  <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                      <i class="ti-mobile"></i>
                    </div>
                    <div class="info-block">
                      <h5 class="font-weight-500">+62 82156471103</h5>
                      <p>Call Free</p>
                    </div>
                  </div>

                  <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                      <i class="ti-email"></i>
                    </div>
                    <div class="info-block">
                      <h5 class="font-weight-500">info@example.com</h5>
                      <p>Email Us</p>
                    </div>
                  </div>
                  <div class="top-info-block d-inline-flex">
                    <div class="icon-block">
                      <i class="ti-time"></i>
                    </div>
                    <div class="info-block">
                      <h5 class="font-weight-500">Mon-Sat 9:00-12.00 </h5>
                      <p>Sunday Closed</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- NAVBAR
              ================================================= -->
          <div class="main-navigation" id="mainmenu-area">
            <div class="container">
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable rounded-radius">

                <a class="navbar-brand d-lg-none d-block" href="index.html">
                  <h4 class="h3 mb-0">Mahakam</h4>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                  aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
                  <!-- Links -->
                  <ul class="navbar-nav ">
                    <li class="nav-item ">
                      <a href="{{ url('/') }}" class="nav-link js-scroll-trigger">
                        Home
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="{{ url('/about') }}" class="nav-link js-scroll-trigger">
                        About
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="{{ url('/service') }}" class="nav-link js-scroll-trigger">
                        Services
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="{{ url('/contact') }}" class="nav-link">
                        Contact
                      </a>
                    </li>
                  </ul>

                  <ul class="ml-lg-auto list-unstyled m-0">
                    <li><a href="{{ url('/contact') }}" class="btn btn-white btn-circled">Get a quote</a></li>
                  </ul>
                </div> <!-- / .navbar-collapse -->
              </nav>
            </div> <!-- / .container -->
          </div>

          <main>
            @yield('content')
        </main>

       <footer class="section " id="footer">
        <div class="overlay footer-overlay"></div>
        <!--Content -->
        <div class="container">
          <div class="row justify-content-start">
            <div class="col-lg-4 col-sm-12">
              <div class="footer-widget">
                <!-- Brand -->
                <a href="index.html" class="footer-brand text-white">
                  Mahakam
                </a>
                <p>A long river named Mahakam flows by their place and supplies it with synergy. It is a paradisematic river, in which roasted parts of sentences fly into your mouth.</p>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 ml-5">
              <div class="footer-widget">
                <h3>About</h3>
                <!-- Links -->
                <ul class="footer-links">
                 <li>
                   <a href="about.html">
                     About Us
                   </a>
                 </li>
                  <li>
                    <a href="service.html">
                      Services
                    </a>
                  </li>
                  <li>
                    <a href="pricing.html">
                      Pricing
                    </a>
                  </li>
                  <li>
                    <a href="project.html">
                     Recent Projects
                    </a>
                  </li>
                  <li>
                    <a href="contact.html">
                      Contact
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="footer-widget">
                <h3>Socials</h3>
                <!-- Links -->
                <ul class="list-unstyled footer-links">
                  <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                  <li>
                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i>Twitter
                    </a></li>
                  <li><a href="https://www.pinterest.com//"><i class="fab fa-pinterest-p"></i>Pinterest
                    </a></li>
                  <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i>linkedin
                    </a></li>
                  <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>YouTube
                    </a></li>
                </ul>
              </div>
            </div>
          </div> <!-- / .row -->


          <div class="row text-right pt-5">
            <div class="col-lg-12">
              <div class="overflow-hidden">
                <!-- Copyright -->
               <p class="footer-copy">
                 Copyright &copy; <script>var CurrentYear = new Date().getFullYear()
                 document.write(CurrentYear)
               </script>. Designed &amp; Developed by <a class="current-year" href="https://themefisher.com/">Themefisher</a>
               </p>
              </div>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </footer>
         <!--
  Essential Scripts
  =====================================-->
  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Slick Slider -->
  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>

  <script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>
