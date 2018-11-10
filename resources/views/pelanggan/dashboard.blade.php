@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')
			

		

	<!-- header -->
    <header class="site-header header center mo-left">
		<div class="top-bar bg-primary text-white">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="dlab-topbar-left">
						<ul>
							<li><i class="fa fa-phone m-r5"></i> 001 1234 6789</li>
							<li><i class="fa fa-map-marker m-r5"></i> 6701 Democracy Blvd, Suite 300, USA</li>
						</ul>
					</div>
					<div class="dlab-topbar-right topbar-social">
						<ul>
							<li><a href="#" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="site-button-link youtube hover"><i class="fa fa-youtube-play"></i></a></li>
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
						<a href="index-2.html" class="dez-page"><img src="images/logo-black.png" alt=""></a>
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
							<li class="active"><a href="#">Home <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="index-2.html" class="dez-page">Home 1</a></li>
									<li><a href="index-3.html" class="dez-page">Home 2</a></li>
								</ul>	
							</li>
							<li><a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="javascript:void(0);" class="dez-page">Header <span class="new-page menu-new">New</span><i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="header-1.html" class="dez-page">Header 1</a></li>
											<li><a href="header-2.html" class="dez-page">Header 2</a></li>
											<li><a href="header-3.html" class="dez-page">Header 3</a></li>
											<li><a href="header-4.html" class="dez-page">Header 4</a></li>
											<li><a href="header-5.html" class="dez-page">Header 5</a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0);" class="dez-page">Footer <span class="new-page menu-new">New</span><i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="footer-1.html" class="dez-page">Footer 1</a></li>
											<li><a href="footer-2.html" class="dez-page">Footer 2</a></li>
											<li><a href="footer-3.html" class="dez-page">Footer 3</a></li>
											<li><a href="footer-4.html" class="dez-page">Footer 4</a></li>
											<li><a href="footer-5.html" class="dez-page">Footer 5</a></li>
										</ul>
									</li>
									<li><a href="about-us.html" class="dez-page">About Us</a></li>
									<li><a href="booking.html" class="dez-page">Booking</a></li>
									<li><a href="team.html" class="dez-page">Our Team</a></li>
									<li><a href="under-maintenance.html" class="dez-page">Under Maintenance<span class="new-page menu-new">New</span></a></li>
									<li><a href="coming-soon.html" class="dez-page">Coming Soon</a></li>
									<li><a href="error-404.html" class="dez-page">Error 404</a></li>
									<li><a href="login.html" class="dez-page">Login</a></li>
									<li><a href="register.html" class="dez-page">Register</a></li>
									<li><a href="contact.html" class="dez-page">Contact Us</a></li>
								</ul>
							</li>
							<li><a href="#">Our Service <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="service.html" class="dez-page">Services</a></li>
									<li><a href="services-details.html" class="dez-page">Services Details</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<li><a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-classic.html" class="dez-page">Classic</a></li>
									<li><a href="blog-classic-sidebar.html" class="dez-page">Classic Sidebar</a></li>
									<li><a href="blog-detailed-grid.html" class="dez-page">Detailed Grid</a></li>
									<li><a href="blog-detailed-grid-sidebar.html" class="dez-page">Detailed Grid Sidebar</a></li>
									<li><a href="blog-left-img.html" class="dez-page">Left Image Sidebar</a></li>
									<li><a href="blog-details.html" class="dez-page">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="#">Our Portfolio <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="portfolio-grid-2.html" class="dez-page">Portfolio Grid 2 </a></li>
									<li><a href="portfolio-grid-3.html" class="dez-page">Portfolio Grid 3 </a></li>
									<li><a href="portfolio-grid-4.html" class="dez-page">Portfolio Grid 4 </a></li>
								</ul>
							</li>
							<li><a href="#">Shop <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu left">
									<li><a href="shop-columns.html" class="dez-page">Shop Columns</a></li>
									<li><a href="shop-columns-sidebar.html" class="dez-page">Shop Columns Sidebar</a></li>
									<li><a href="shop-product-details.html" class="dez-page">Product Details</a></li>
									<li><a href="shop-cart.html" class="dez-page">Cart</a></li>
									<li><a href="shop-checkout.html" class="dez-page">Checkout</a></li>
									<li><a href="shop-wishlist.html" class="dez-page">Wishlist</a></li>
									<li><a href="shop-login.html" class="dez-page">Shop Login</a></li>
									<li><a href="shop-register.html" class="dez-page">Shop Register</a></li>
								</ul>
							</li>
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_265_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container errow-style-1" data-alias="" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
			<!-- START REVOLUTION SLIDER 5.4.6.3 fullwidth mode -->
			<div id="rev_slider_265_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3">
				<ul>  <!-- SLIDE  -->
					<li data-index="rs-100" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/main-slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<div class="tp-caption tp-shape d-lg-block d-none tp-shapewrapper bg-primary tp-resizeme" 
							id="slide-100-layer-1" 
							data-x="380" 
							data-y="295" 
							data-width="100"
							data-height="5"
							data-whitespace="nowrap"
							data-type="shape" 
							data-responsive_offset="on" 
							data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]" style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;"> </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none text-primary" 
							id="slide-100-layer-2" 
							data-x="380" 
							data-y="180" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;">Experience the Best</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none text-primary" 
							id="slide-100-layer-3" 
							data-x="380" 
							data-y="260" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[110,110,110,110]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;"> Beauty Services</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme d-lg-block d-none" 
							id="slide-100-layer-4" 
							data-x="380" 
							data-y="360" 
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #320016; white-space: inherit; font-family:Nunito;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
						</div>	
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none" 
							id="slide-100-layer-5" 
							data-x="380" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button button-md">Get A Qutoe</a>
						</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none" 
							id="slide-100-layer-6" 
							data-x="570" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button-secondry button-md">Talk To US</a>
						</div>
					</li>
					<li data-index="rs-200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/main-slider/slide2.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
						<!-- MAIN IMAGE -->
						<img src="images/main-slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
						<div class="tp-caption tp-shape d-lg-block d-none tp-shapewrapper bg-primary tp-resizeme" 
							id="slide-200-layer-1" 
							data-x="380" 
							data-y="295" 
							data-width="100"
							data-height="5"
							data-whitespace="nowrap"
							data-type="shape" 
							data-responsive_offset="on" 
							data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]" style="z-index: 15;border-color:rgba(0, 0, 0, 0.50);border-width:0px; border-radius:2px;"> </div>
						<!-- LAYER NR. 3 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none text-primary" 
							id="slide-200-layer-2" 
							data-x="380" 
							data-y="180" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;">Experience the Best</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none text-primary" 
							id="slide-200-layer-3" 
							data-x="380" 
							data-y="260" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+500","split":"chars","splitdelay":0.05000000000000000277555756156289135105907917022705078125,"speed":2000,"split_direction":"forward","frame":"0","from":"opacity:0;","color":"#000000","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":2000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['left','left','left','left']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[110,110,110,110]"
							style="z-index: 7; white-space: nowrap; font-size: 65px; line-height: 80px; font-weight: 800; letter-spacing: 0px; font-family:Nunito;"> Beauty Services</div>
						<!-- LAYER NR. 2 -->
						<div class="tp-caption   tp-resizeme d-lg-block d-none" 
							id="slide-200-layer-4" 
							data-x="380" 
							data-y="360" 
							data-width="[700,700,700,700]"
							data-height="['auto']"
							data-type="text" 
							data-responsive_offset="on" 
							data-frames='[{"delay":"+1990","speed":2000,"frame":"0","from":"opacity:0;","color":"#e5452b","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","color":"transparent","to":"opacity:0;","ease":"Power3.easeInOut"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0,0,0,0]"
							data-paddingright="[0,0,0,0]"
							data-paddingbottom="[0,0,0,0]"
							data-paddingleft="[0,0,0,0]"
							style="z-index: 6; font-size: 18px; line-height: 28px; font-weight: 500; color: #320016; white-space: inherit; font-family:Nunito;">We offer a full range of hairdressing services for men and women, eyebrow and eyelash care, the services of make-up artists and stylists. Entrust your beauty to professionals who really care about...
						</div>	
						<!-- LAYER NR. 6 -->
						<div class="tp-caption tp-resizeme d-lg-block d-none" 
							id="slide-200-layer-5" 
							data-x="380" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 10; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button button-md">Get A Qutoe</a>
						</div>
						<div class="tp-caption tp-resizeme d-lg-block d-none" 
							id="slide-200-layer-6" 
							data-x="570" 
							data-y="485" 
							data-width="['auto']"
							data-height="['auto']"
							data-type="button" 
							data-actions=''
							data-responsive_offset="on" 
							data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power0.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
							data-textAlign="['inherit','inherit','inherit','inherit']"
							data-paddingtop="[0]"
							data-paddingright="[0]"
							data-paddingbottom="[0]"
							data-paddingleft="[0]"
							style="z-index: 11; white-space: nowrap; font-size: 16px; line-height: 30px; font-weight: 600; font-family:Montserrat;border-radius:3px 3px 3px 3px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">	<a href="#" class="site-button-secondry button-md">Talk To US</a>
						</div>
					</li>
				</ul>
				<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
			</div>  
		</div>  
        <!-- Main Slider -->
		    <!-- About Us -->
            <div class="section-full bg-white content-inner-2 overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Services</h2>
						<h6 class="m-b10">You Will Like To Look Like Goddes Every Day!</h6>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
                    <div class="img-carousel owl-carousel owl-theme owl-none owl-dots-primary-big owl-btn-center-lr owl-loade m-b30">
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic1.jpg" alt=""/>
									<i class="flaticon-woman-1"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Cosmetics</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic2.jpg" alt=""/>
									<i class="flaticon-lotus"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Hairdressing</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic3.jpg" alt=""/>
									<i class="flaticon-candle"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Body Treatments</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic4.jpg" alt=""/>
									<i class="flaticon-candle-1"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Massages</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic1.jpg" alt=""/>
									<i class="flaticon-woman-1"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Cosmetics</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic2.jpg" alt=""/>
									<i class="flaticon-lotus"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Hairdressing</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic3.jpg" alt=""/>
									<i class="flaticon-candle"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Body Treatments</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic4.jpg" alt=""/>
									<i class="flaticon-candle-1"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Massages</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic1.jpg" alt=""/>
									<i class="flaticon-woman-1"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Cosmetics</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic2.jpg" alt=""/>
									<i class="flaticon-lotus"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Hairdressing</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic3.jpg" alt=""/>
									<i class="flaticon-candle"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Body Treatments</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="service-box text-center">
								<div class="service-images m-b15">
									<img src="images/our-services/pic4.jpg" alt=""/>
									<i class="flaticon-candle-1"></i>
								</div>
								<div class="service-content">
									<h6 class="text-uppercase"><a href="#" class="text-primary">Massages</a></h6>
									<p>It is a long established fact that a reader will be distracted by the readable content of a page.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="#" class="site-button outline">See all Services</a> 
					</div>
                </div>
            </div>
			<!-- About Us End -->
			<!-- Our Services -->
			<div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url(images/background/bg5.jpg); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
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
			<!-- Why Chose Us -->
			<div class="section-full content-inner-2 our-portfolio" style="background-image:url(images/background/bg6.jpg); background-size: cover;">
				<div class="container">
					<div class="section-head text-black text-center m-b20">
						<h2 class="text-primary m-b10">Our Portfolio</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="site-filters style1 clearfix center">
								<ul class="filters" data-toggle="buttons">
									<li data-filter="" class="btn active"><input type="radio"><a href="#"><span>All</span></a></li>
									<li data-filter="image-1" class="btn"><input type="radio"><a href="#"><span>Haircuts</span></a></li>
									<li data-filter="image-2" class="btn"><input type="radio"><a href="#"><span>Coloring</span></a></li>
									<li data-filter="image-3" class="btn"><input type="radio"><a href="#"><span>Highlights</span></a></li>
									<li data-filter="image-4" class="btn"><input type="radio"><a href="#"><span>Highlights</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<ul id="masonry" class="portfolio-box dlab-gallery-listing gallery-grid-4 gallery mfp-gallery">
							<li class="image-1 image-4 card-container col-lg-3 col-md-3 col-sm-3">
								<div class="dlab-box">
									<div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
									<img src="images/gallery/image-1.jpg" alt="">
										<div class="overlay-bx">
											<div class="overlay-icon">
												<a class="mfp-link" title="Image Title Come Here" href="images/gallery/image-1.jpg">  
													<i class="ti-fullscreen"></i>
												</a> 
											</div>
										</div>
									</div>
								</div>
								<div class="dlab-box p-tb30 image-2">
									<div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
									<img src="images/gallery/image-2.jpg" alt="">
										<div class="overlay-bx">
											<div class="overlay-icon">
												<a class="mfp-link" title="Image Title Come Here" href="images/gallery/image-2.jpg"> 
													<i class="ti-fullscreen"></i>
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="image-2 card-container col-lg-6 col-md-6 col-sm-6">
								<div class="dlab-box m-b30">
									<div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
									<img src="images/gallery/image-3.jpg" alt="">
										<div class="overlay-bx">
											<div class="overlay-icon">
												<a class="mfp-link" title="Image Title Come Here" href="images/gallery/image-3.jpg"> 
													<i class="ti-fullscreen"></i>
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="image-3 image-4 card-container col-lg-3 col-md-3 col-sm-3">
								<div class="dlab-box m-b30">
									<div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
									<img src="images/gallery/image-4.jpg" alt="">
										<div class="overlay-bx">
											<div class="overlay-icon">
												<a class="mfp-link" title="Image Title Come Here" href="images/gallery/image-4.jpg"> 
													<i class="ti-fullscreen"></i>
												</a>  
											</div>
										</div>
									</div>
								</div>
								<div class="dlab-box">
									<div class="dlab-media dlab-img-overlay9 dlab-img-effect zoom">
									<img src="images/gallery/image-5.jpg" alt="">
										<div class="overlay-bx">
											<div class="overlay-icon">
												<a class="mfp-link" title="Image Title Come Here" href="images/gallery/image-5.jpg"> 
													<i class="ti-fullscreen"></i>
												</a> 
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Why Chose Us End -->
			<!-- Our Portfolio -->
			<div class="section-full video-presentation overlay-black-dark bg-img-fix"  style="background-image:url(images/background/bg1.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 text-white text-center">
							<h2>Video Presentation </h2>
							<p class="max-w700 m-auto">In this video, our staff members tell about their work at Solari, how they achieve the best results for their clients every day and more. Click the Play button below to watch this presentation.</p>
							<div class="video-play-icon m-t50">
								<a href="https://www.youtube.com/watch?v=UMX6eWoMXAM" class="popup-youtube video"><i class="ti-control-play"></i></a>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- Our Portfolio END -->
			<!-- Our Professional Team -->
			<div class="section-full content-inner-2 overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
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
								<div class="dlab-media"> <img src="images/our-team/pic1.jpg" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="images/our-team/pic2.jpg" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="images/our-team/pic3.jpg" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="images/our-team/pic5.jpg" alt=""></div>
								<div class="dlab-title-bx p-a10">
									<h5 class="text-black m-a0"><a href="#">John Doe</a></h5>
									<span class="clearfix">Cosmetologist</span>
								</div>
							</div>
						</div>	
						<div class="item">
							<div class="dlab-box text-center team-box">
								<div class="dlab-media"> <img src="images/our-team/pic4.jpg" alt=""></div>
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
			<!-- Our Portfolio -->
			<div class="section-full content-inner-2" style="background-image:url(images/background/bg4.jpg); background-position: bottom; background-size:cover;">
                <div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Testimonials Of Our Clients</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="testimonial-two-dots owl-carousel owl-theme owl-dots-primary-full owl-btn-center-lr owl-btn-3">
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic1.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic2.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>BeautyZone was extremely creative and forward thinking. They are also very quick and efficient when executing changes for us.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
						<div class="item p-a5">
							<div class="testimonial-9">
								<div class="testimonial-pic radius style1"><img src="images/testimonials/pic3.jpg" width="100" height="100" alt=""></div>
								<div class="testimonial-text">
									<p>I think it is awesome and I can't thank you enough for working so closely with me. The entire team has been great to work.</p>
								</div>
								<div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
							</div>
						</div>
					</div>
				</div>
            </div>
			<!-- Our Portfolio END -->
			<!-- Our Portfolio -->
			<div class="section-full content-inner overlay-white-middle" style="background-image:url(images/background/bg1.png), url(images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
                <div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Latest Blog</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
					</div>
					<div class="blog-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1">
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/pic4.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">September 18, 2017</li>
											<li class="post-comment"><a href="#">5k</a> </li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">September 18, 2017</li>
											<li class="post-comment"><a href="#">5k</a> </li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">September 18, 2017</li>
											<li class="post-comment"><a href="#">5k</a> </li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
						<div class="item">
                            <div class="blog-post blog-grid blog-style-1">
                                <div class="dlab-post-media dlab-img-effect radius-sm"> <a href="#"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
                                <div class="dlab-info">
									 <div class="dlab-post-meta">
										<ul class="d-flex align-items-center">
											<li class="post-date">September 18, 2017</li>
											<li class="post-comment"><a href="#">5k</a> </li>
										</ul>
                                    </div>
                                    <div class="dlab-post-title ">
                                        <h5 class="post-title font-20"><a href="#">Spring is in the Air and and So Our These Amazing Spa Offers</a></h5>
                                    </div>
									<div class="dlab-post-readmore blog-share"> 
										<a href="#" title="READ MORE" rel="bookmark" class="site-button-link border-link black">READ MORE</a>
									</div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
            </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    
	
	
@endsection