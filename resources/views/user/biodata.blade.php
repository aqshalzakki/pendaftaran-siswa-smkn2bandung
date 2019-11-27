@extends('logged-in-components.master')

@section('title', "Halaman Biodata")
@section('active_biodata', 'active')

@section('main-content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Biodata</h1>
</div>
<hr>

<!-- Content Row -->
<div class="row">
  <div class="col-md-5 mt-3">
    <img src="{{ asset('images/profile/default.png') }}">
  </div>
</div>
<div class="row mt-4">
  <div class="col-md-5">
    Nama : {{ $user->nama }}
  </div>
</div>

@endsection