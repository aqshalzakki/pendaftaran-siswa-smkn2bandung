@extends('components.master')

@section('title', 'Pendaftaran Peserta Didik Baru SMKN 2 Bandung')
@section('active_home', 'active')

@section('main-content')
	<div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Selamat datang di PPDB SMKN 2 BANDUNG</h1>
            <p><a href="{{ route('login.nisn') }}" class="btn btn-primary px-4 py-3">Daftar Sekarang!</a> <a href="#" class="btn btn-secondary px-4 py-3">Lihat Pendaftar</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">

    		<h2 class="ftco-animate text-center mb-5">ALUR PPDB SMK NEGERI 2 KOTA BANDUNG</h2>

    	<div class="row">
    			
          {{-- <div class="col-md-4 heading-section">
            
          </div> --}}
          @foreach ($alur_ppdb as $alur)
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services p-3 py-4 d-block text-center">
                <div class="d-flex justify-content-center align-items-center mb-3">
                  <img class="my-icon-size" src="{{ asset('images/png/' . $alur->icon_file) }}">
                </div>
                <div class="media-body px-3">
                  <h3 class="heading">{{ $alur->judul }}</h3>
                  <p>{{ $alur->deskripsi }}</p>
                </div>
              </div>      
            </div>
          @endforeach
        </div>
    	</div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(images/bg_3.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-9 about-video text-center">
   				<h2 class="ftco-animate">Sekolah yang menghasilkan generasi penerus bangsa yang siap bekerja maupun berwirausaha.</h2>
    				<div class="video d-flex justify-content-center">
    					{{-- VIDEO TENTANG SMKN 2 BANDUNG --}}
    					<a href="https://www.youtube.com/watch?v=e50wGoHhbz0" class="button popup-vimeo d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>

    					{{-- VIDEO MPLS SMKN2 BANDUNG --}}
    					{{-- https://www.youtube.com/watch?v=avRbakHjj4Q --}}
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4000">0</strong>
		                <span>Jumlah Kuota Pendaftaran</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="2304">0</strong>
		                <span>Jumlah Pendaftar</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="">0</strong>
		                <span>Peserta yang diterima</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="">0</strong>
		                <span>Peserta yang ditolak</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h1 class="mb-4">Kepala Sekolah beserta Wakilnya</h1>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Sukarna S.Pd</a></h3>
        					<span class="position">Wakil Kepala Sekolah</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Tatang Gunawan S.Pd</a></h3>
        					<span class="position">Kepala Sekolah</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Asep Suryana S.Pd</a></h3>
        					<span class="position">Wakil Kepala Sekolah</span>
        					<p class="ftco-social d-flex">
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a>
		                <a href="#" class="d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a>
		              </p>
        				</div>
        			</div>
        			<div class="text">
        				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section id="jurusan" class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Program Keahlian</h2>
          </div>
        </div>
    		<div class="row">
    			@foreach ($jurusan as $keahlian)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="course align-self-stretch">
                <a href="{{ route('pages.jurusan', ['keahlian'=>strtolower($keahlian->jurusan)]) }}" class="img" style="background-image: url({{ asset('images/jurusan/' . $keahlian->thumbnail) }})"></a>
                <div class="text p-4">
                  <p class="category"><span>{{ $keahlian->kategori }}</span></p>  
                  <h3 class="mb-3"><a href="{{ route('pages.jurusan') }}">{{ $keahlian->jurusan }}</a></h3>
                  <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                  <p><a href="{{ route('pages.jurusan') }}" class="btn btn-primary">Lihat detail</a></p>
                </div>
              </div>
            </div>
          @endforeach

    		</div>
    	</div>
    </section>

    
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Berita Terbaru</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/kegiatan/jerawat.jpg') }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                {{-- <h3 class="heading mb-4"><a href="#">Jumlah pendaftar PPDB mencapai 20.000 peserta</a></h3> --}}
                <h3 class="heading mb-4"><a href="#">WOW ternyata inilah 10 penyebab tumbuhnya jerawat pada bagian kaki... No.7 mencengangkan!!</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry d-flex align-self-stretch flex-column-reverse">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/kegiatan/oura.jpg') }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Sep. 10, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">Evos Oura pick estes? tencent bercanda?</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{ asset('images/kegiatan/job_matching.jpg') }});">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">10 September 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mb-4"><a href="#">SMKN 2 Bandung menekan jumlah pengangguran melalui event Job Matching</a></h3>
                <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span></p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection