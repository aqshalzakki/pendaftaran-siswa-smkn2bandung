<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }} ">
    
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }} ">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }} ">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }} ">

    
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
    <link rel="stylesheet" href="{{ asset('css/mycss.css') }}">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('pages.home') }}"><i class="flaticon-university"></i> PPDB <br><small>SMKN 2 BANDUNG</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-home nav-item @yield('active_home')"><a href="index.html" class="nav-link">Home</a></li>
          <li class="nav-item @yield('active_pendaftar')"><a href="about.html" class="nav-link">Pendaftar</a></li>
          <li class="nav-jurusan nav-item @yield('active_jurusan')"><a href="#jurusan" class="nav-link">Jurusan</a></li>
          <li class="nav-item @yield('active_informasi')"><a href="teacher.html" class="nav-link">Informasi</a></li>
          <li class="nav-item @yield('active_bantuan')"><a href="teacher.html" class="nav-link">Bantuan</a></li>
          <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Daftar PPDB</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    
    @yield('main-content')

    <footer class="ftco-footer ftco-bg-dark ftco-section img" style="background-image: url(images/bg_2.jpg); background-attachment:fixed;">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2><a class="navbar-brand" href="index.html"><i class="flaticon-university"></i> PPDB <br><small>SMKN 2 BANDUNG</small></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/vhs2bandung?lang=id"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/SMK-Negeri-2-Bandung-445587218969215/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://instagram.com/smkn2bandung"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Berita Terbaru</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Navigasi</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Tentang</a></li>
                <li><a href="#" class="py-2 d-block">Pendaftar</a></li>
                <li><a href="#jurusan" class="py-2 d-block">Jurusan</a></li>
                <li><a href="#" class="py-2 d-block">Informasi</a></li>
                <li><a href="#" class="py-2 d-block">Bantuan</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Lokasi</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Ciliwung No.4, Bandung 40125</span></li>
	                <li><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></li>
	                <li><span class="icon icon-envelope"></span><span class="text">infoppdb@gmail.com</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="{{ route('pages.home') }}">PPDB SMKN 2 BANDUNG</a> | Template by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('js/google-map.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/myjs.js') }}"></script>
  </body>
</html>