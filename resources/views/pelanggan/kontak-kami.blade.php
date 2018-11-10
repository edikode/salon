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

	<div class="contact_area mb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="contact_message">
						<div class="contact_title">
							<h2>Hubungi Kami</h2>   
						</div>
						<form id="contact-form" method="POST"  action="https://d29u17ylf1ylz9.cloudfront.net/lion-v2/lion/assets/mail.php">
							<div class="row">
								<div class="col-lg-6">
									<input name="name" placeholder="Name *" type="text">    
								</div>
								<div class="col-lg-6">
									<input name="email" placeholder="Email *" type="email">    
								</div>
								<div class="col-lg-6">
									<input name="subject" placeholder="Subject *" type="text">   
								</div>
									<div class="col-lg-6">
									<input name="phone" placeholder="Phone *" type="text">   
								</div>
								
								<div class="col-12">
									<div class="contact_textarea">
										<textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
									</div>   
									<button type="submit"> Kirim Pesan </button>  
								</div> 
								<div class="col-12">
									<p class="form-messege"></p>
								</div>
							</div>
						</form>    
					</div> 
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="contact_info_wrapper">
						<div class="contact_title">
							<h4>{{$profil->deskripsi}}</h4>    
						</div>
						<div class="contact_info mb-15">
							<p>@php echo $profil->teks @endphp</p>
						</div>
						<div class="contact_info mb-15">
							<ul>
								<li><i class="fa fa-fax"></i>  Alamat : {{$setting->alamat}}</li>
								<li><i class="fa fa-phone"></i> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></li>
								<li><i class="fa fa-envelope-o"></i> {{$setting->telepon}}</li>
							</ul>        
						</div>
						{{-- <div class="contact_info mb-15">
							<h3><strong>Working hours</strong></h3>
							<p><strong>Monday – Saturday</strong>:  08AM – 22PM</p>    
						</div>     --}}
					</div> 
				</div>
			</div>
		</div>
	</div>
	
@endsection