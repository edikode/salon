@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')
			
	<!--breadcrumbs area start-->
	<div class="breadcrumbs_area bread_about">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb_content">
						<div class="breadcrumb_header">
							<a href="{{url('/')}}"><i class="fa fa-home"></i></a>
							<span><i class="fa fa-angle-right"></i></span>
							<span> {{$profil->nama}}</span>
						</div>
						{{-- <div class="breadcrumb_title">
							<h2>{{$profil->nama}}</h2>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--breadcrumbs area end-->

	<!--about section area -->
	<div class="about_section_aera">
		<div class="container-fluid about_container">
			<div class="row no-gutters align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="about_thumb">
						<img src="{{ asset('upload/profil/sedang/'.$profil->gambar) }}" alt="{{$profil->nama}}">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="about_content">
						<h1>{{$profil->deskripsi}}</h1>
						@php
							echo $profil->teks
						@endphp
						<div class="view__work">
							<a href="#">Mulai Sekarang </a>
						</div>  
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--about section end-->
	
	
	<!--counterup area -->
	<div class="counter_up_area mb-40">
		<div class="container-fluid counter">
			<div class="row no-gutters">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_counterup">
						<div class="counter_img">
							<img src="{{ url('pelanggan/img/cart/count.png') }}" alt="">
						</div>
						<div class="counter_info">
							<h2 class="counter_number">2170</h2>
							<p>happy customers</p>
						</div>
					</div>
				</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_counterup count-two">
						<div class="counter_img">
							<img src="{{ url('pelanggan/img/cart/count2.png') }}" alt="">
						</div>
						<div class="counter_info">
							<h2 class="counter_number">8080</h2>
							<p>AWARDS won</p>
						</div>
					</div>
				</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_counterup">
						<div class="counter_img">
							<img src="{{ url('pelanggan/img/cart/count3.png') }}" alt="">
						</div>
						<div class="counter_info">
							<h2 class="counter_number">2150</h2>
							<p>HOURS WORKED</p>
						</div>
					</div>
				</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_counterup count-two">
						<div class="counter_img">
							<img src="{{ url('pelanggan/img/cart/cart5.png') }}" alt="">
						</div>
						<div class="counter_info">
							<h2 class="counter_number">2170</h2>
							<p>COMPLETE PROJECTS</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--counterup end-->
	
@endsection