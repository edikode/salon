<header class="site-header header center mo-left">
	<div class="top-bar bg-primary text-white">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="dlab-topbar-left">
					<ul>
						<li><i class="fa fa-phone m-r5"></i> {{$setting->telepon}}</li>
						<li><i class="fa fa-map-marker m-r5"></i> {{$setting->alamat}}</li>
					</ul>
				</div>
				<div class="dlab-topbar-right topbar-social">
					<ul>
						<li><a href="#" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
						{{-- <li><a href="#" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li> --}}
						<li><a href="#" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
						{{-- <li><a href="#" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" class="site-button-link youtube hover"><i class="fa fa-youtube-play"></i></a></li> --}}
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- main header -->
	<div class="sticky-header main-bar-wraper navbar-expand-lg">
		<div class="main-bar clearfix ">
			<div class="container clearfix">
				<!-- website logo -->
				<div class="logo-header mostion">
					<a href="{{url('/')}}" class="dez-page"><img src="{{asset('admins/images/saline-front.png')}}" alt=""></a>
				</div>
				<!-- nav toggle button -->
				<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<!-- main nav -->
				<div class="header-nav navbar-collapse collapse justify-content-between" id="navbarNavDropdown">
					<ul class="nav navbar-nav">	
						<li><a href="#">Layanan <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="javascript:void(0);" class="dez-page">Creambat <i class="fa fa-angle-right"></i></a>
									<ul class="sub-menu">
										<li><a href="#" class="dez-page">Creambat 1</a></li>
										<li><a href="#" class="dez-page">Creambat 2</a></li>
										<li><a href="#" class="dez-page">Creambat 3</a></li>
									</ul>
								</li>
								<li><a href="javascript:void(0);" class="dez-page">Perawatan Mata <i class="fa fa-angle-right"></i></a>
									<ul class="sub-menu">
										<li><a href="#" class="dez-page">Bulu Mata</a></li>
									</ul>
								</li>
								<li><a href="#" class="dez-page">Spa</a></li>
							</ul>
						</li>
						<li><a href="{{url('tim-kami')}}" class="dez-page">Tim Profesional</a></li>
						<li><a href="{{url('kontak-kami')}}" class="dez-page">Kontak Kami</a></li>
					</ul>
					<ul class="nav navbar-nav">	
						<li><a href="{{url('blog')}}" class="dez-page">Blog</a></li>
						<li><a href="{{url('faq')}}" class="dez-page">FAQ</a></li>
						<li><a href="{{url('login')}}" class="dez-page">Login</a></li>
					</ul>		
				</div>
			</div>
		</div>
	</div>
	<!-- main header END -->
</header>