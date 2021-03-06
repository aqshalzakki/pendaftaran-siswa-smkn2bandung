<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}"><i class="flaticon-university"></i> PPDB <br><small>SMKN 2 BANDUNG</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-home nav-item @yield('active_home')"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
        <li class="nav-item @yield('active_pendaftar')"><a href="about.html" class="nav-link">Pendaftar</a></li>
        <li class="nav-jurusan nav-item @yield('active_jurusan')"><a href="#jurusan" class="nav-link">Jurusan</a></li>
        <li class="nav-item @yield('active_informasi')"><a href="teacher.html" class="nav-link">Informasi</a></li>
        <li class="nav-item @yield('active_bantuan')"><a href="teacher.html" class="nav-link">Bantuan</a></li>
        @guest
        @endguest
        @if(session()->has(['_token', 'id']))
        
            <li class="nav-item"><a href="{{ route('calon-siswa.biodata') }}" class="nav-link">Profile Saya</a></li>
          @else
            <li class="nav-item cta"><a href="{{ route('login.nisn') }}" class="nav-link"><span>Daftar PPDB</span></a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>