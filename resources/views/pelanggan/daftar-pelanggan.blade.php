@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')
	
	<div class="breadcrumbs_area login_bread">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb_content">
						<div class="breadcrumb_header">
							<a href="{{url('/')}}"><i class="fa fa-home"></i></a>
							<span><i class="fa fa-angle-right"></i></span>
							<span> Daftar Pelanggan</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
	<div class="account_area">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-6 col-md-6">
					<div class="login_title">
						<h2>Pendaftaran Pelanggan</h2>
					</div>
					@include('errors/pesan_error')
					<div class="login_form">
						<form action="{{url('simpan-pelanggan')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}	
							<div class="login_input">
								<label>Nama <span>*</span></label>
								<input type="text" name="nama" value='@if(count($errors) > 0){{old('nama')}}@endif' required>
							</div>
							<div class="login_input">
								<label>Telepon <span>*</span></label>
								<input type="text" name="telepon" value='@if(count($errors) > 0){{old('telepon')}}@endif' required>
							</div>
							<div class="">
								<label>Alamat <span>*</span></label>
								<textarea name="alamat" required autocomplete="off">@if(count($errors) > 0){{old('alamat')}}@endif</textarea>
							</div>
							<div class="login_input">
								<label>Email <span>*</span></label>
								<input type="email" name="email" value='@if(count($errors) > 0){{old('email')}}@endif' required>

								@if ($errors->has('email'))
									<span for="email" class="help-block" style="color:red">* {{ $errors->first('email') }}</span>
								@endif
							</div>
							<div class="login_input">
								<label>Password <span>*</span></label>
								<input type="password" name="password" required>
								@if ($errors->has('email'))
									<span for="email" class="help-block" style="color:red">* Terjadi Kesalahan pada Password.</span>
								@endif
							</div>
							<div class="login_input">
								<label>Ulangi Password <span>*</span></label>
								<input type="password" name="konfirmasiPassword" required>
							</div>
							<div class="login_submit">
								<button type="submit">Daftar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
@endsection