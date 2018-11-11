@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')
			
	<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('pelanggan/images/banner/bnr3.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Our Team</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Our Team</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<!-- Our Professional Team -->
			<div class="section-full content-inner-2 overlay-white-middle" style="background-image:url({{asset('pelanggan/images/background/bg1.png')}}), url(images/background/bg2.png')}}); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Professional Team</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="team-carousel owl-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('pelanggan/images/our-team/pic1.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('pelanggan/images/our-team/pic2.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('pelanggan/images/our-team/pic3.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('pelanggan/images/our-team/pic5.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="{{asset('pelanggan/images/our-team/pic4.jpg')}}" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<!-- Our Professional Team End -->
			<!-- Our Services -->
			<div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url({{asset('pelanggan/images/background/bg5.jpg')}}); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-woman"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">We are Professional</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"><span class="icon-cell text-primary"><i class="flaticon-mortar"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Lux Cosmetic</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-candle"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">Medical Education</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b10">
							<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
								<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-sauna-1"></i></span> </div>
								<div class="icon-content">
									<h6 class="dlab-tilte">The Newest Equipment</h6>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
									<a href="#" class="site-button-secondry">Site Button</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services -->
			<div class="section-full bg-white content-inner">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Professional Team</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('pelanggan/images/our-team/pic1.jpg')}}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Ann Smith</a></h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('pelanggan/images/our-team/pic2.jpg')}}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Mary Lucas</a></h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('pelanggan/images/our-team/pic3.jpg')}}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Ann Smith</a></h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="{{asset('pelanggan/images/our-team/pic4.jpg')}}" alt="">
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Candice Marshall </a></h6>
									<p class="m-b0">It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Quotes -->
		</div>
		<!-- contact area END -->
    </div>
	
@endsection