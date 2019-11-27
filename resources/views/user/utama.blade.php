@extends('logged-in-components.master')

@section('title', "Halaman Calon Siswa")
@section('active_utama', 'active')

@section('main-content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
</div>

<!-- Content Row -->
<div class="row">
  
  <div class="col-md-10">
    <div class="jumbotron">
      <h1 class="h3 mb-3 text-gray-800">Selamat Datang {{$user->nama}}!</h1>
      <p class="lead">Untuk mendaftar ppdb silahkan ikuti langkah - langkah pendaftaran</p>
      <hr class="my-4">
      <p>Jika anda belum melengkapi biodata anda.. silahkan lengkapi terlebih dahulu.</p>
      <a class="btn btn-primary btn-lg" href="{{ route('calon-siswa.edit') }}" role="button">Lengkapi Sekarang</a>
    </div>
  </div>
</div>

@endsection