<footer class="site-footer text-uppercase footer-white">
		<!-- Our Portfolio END -->
		<div class="portfolio-gallery ">
			<div class="container-fluid">
				<div class="row">
					<div class="carousel-gallery dots-none owl-none owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 mfp-gallery">
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic1.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic1.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic1.jpg')}}" alt="">
							</a>
						</div>
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic2.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic2.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic2.jpg')}}" alt="">
							</a>
						</div>
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic2.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic3.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic3.jpg')}}" alt="">
							</a>
						</div>
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic4.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic4.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic4.jpg')}}" alt="">
							</a>
						</div>
						<div class="item  dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic5.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic5.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic5.jpg')}}" alt="">
							</a>
						</div>
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic6.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic6.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic6.jpg')}}" alt="">
							</a>
						</div>
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic7.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic7.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic7.jpg')}}" alt="">
							</a>
						</div>
						<div class="item dlab-box">
							<a href="{{asset('pelanggan/images/gallery/pic8.jpg')}}" data-source="{{asset('pelanggan/images/gallery/pic8.jpg')}}" class="mfp-link dlab-media dlab-img-overlay3" title="Image title come here">
								<img src="{{asset('pelanggan/images/gallery/pic8.jpg')}}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="footer-top bg-primary">
            <div class="container wow fadeIn" data-wow-delay="0.5s">
                <div class="row">
					<div class="col-xl-4 col-lg-4 col-md-5 col-sm-5 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h6 class="m-b30 text-white ">Kontak Saline APP</h6>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>Alamat</strong> {{$setting->alamat}} </li>
                                <li><i class="ti-mobile"></i><strong>Telepon</strong>{{$setting->telepon}}</li>
								<li><i class="ti-email"></i><strong>Email</strong>{{$setting->email}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 footer-col-4 ">
                        <div class="widget">
							<img src="{{asset('upload/setting/kecil/'.$setting->gambar)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom bg-primary">
            <div class="container">
                <div class="row">
                   <div class="col-lg-6 col-md-6 col-sm-6 text-center text-md-left"> <span>Copyright © 2018</span> </div>
                   <div class="col-lg-6 col-md-6 col-sm-6 text-center text-md-right ">  
						{{-- <div class="widget-link "> 
							<ul>
								<li><a href="#"> Help Desk</a></li> 
								<li><a href="#"> Privacy Policy</a></li> 
							</ul>
						</div> --}}
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    