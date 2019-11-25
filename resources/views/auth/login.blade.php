@extends('components.master')

@section('title', 'Halaman Login')
@section('main-content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form method="get" class="{{ route('login.nisn') }}" class="login100-form validate-form">
					@csrf
					<span class="login100-form-title p-b-33">
						Login
					</span>
					<p class="mb-2">Sebelum mendaftar ppdb silahkan login terlebih dahulu menggunakan NISN anda</p>
					<div class="wrap-input100 validate-input" data-validate = "NISN harus diisi">
						<input class="input100" type="text" name="nisn" placeholder="NISN" value="{{ old('nisn') }}">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					@error('nisn')
						<p class="mx-2 text-danger small-text">{{ $message }}</p>
					@enderror
					<div class="container-login100-form-btn m-t-20">
						<button type="submit" class="login100-form-btn">
							MASUK
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Lupa
						</span>

						<a target="blank" href="https://nisn.data.kemdikbud.go.id/page/data" class="txt2 hov1">
							NISN?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Sudah mempunyai akun PPDB? Login 
						</span>

						<a href="#" class="txt2 hov1">
							akun PPDB
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection