@extends('guest-components.master')

@section('title', 'Daftar Jurusan SMKN 2 Bandung')
@section('active_jurusan', 'active')

@section('main-content')
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $jurusan->jurusan }}</h1>
				<img style="height: 500px; width: 500px;" src="{{ asset('images/jurusan/' . $jurusan->thumbnail) }}">
				<hr>
			</div>
		</div>
	</div>	
@endsection