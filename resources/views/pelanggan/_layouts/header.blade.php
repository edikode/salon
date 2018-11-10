<!--header area start-->
	<div class="header_area">
		<!--header top start-->
		<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="top_left_sidebar">
							<div class="contact_link">
								<span>Telepon Kantor : <strong>{{$setting->telepon}}</strong></span>
							</div>
							{{-- <div class="switcher">
								<ul>
									<li class="currency"><a href="#">Currency : <strong>USD </strong><i class="fa fa-angle-down"></i></a>
										<ul class="dropdown_currency">
											<li class="select"><a href="#" title="Dollar (USD)">Dollar (USD)</a></li>
											<li><a href="#" title="Euro (EUR)"> Euro (EUR) </a></li>
										</ul>
									</li>
									<li class="languages"><a href="#"><img src="{{ url('pelanggan/img/logo/lion.jpg') }}" alt=""> English <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown_languages">
											<li class="select"><img src="{{ url('pelanggan/img/logo/lion.jpg') }}" alt=""> English</li>
											<li><a href="#" title="اللغة العربية (Arabic)"><img src="{{ url('pelanggan/img/logo/lion1.jpg') }}" alt=""> اللغة العربية </a></li>
										</ul>
									</li>
								</ul>
							</div> --}}
						</div>
					</div>
					<div class="col-lg-6">
						<div class="header_right_info text-right">
							<ul>
								
								@if (Auth::guest())
									<li class="log_in"><a href="{{url('daftar')}}"><i class="fa fa-user" aria-hidden="true"></i> Daftar  </a></li>
									<li class="log_in"><a href="{{url('login')}}"><i class="fa fa-lock" aria-hidden="true"></i> Log in  </a></li>
								@else
									<li class="my_account"><a href="{{url('info-akun')}}"><i class="fa fa-user" aria-hidden="true"></i> Info Akun</a></li>
									<li class="link_checkout"><a href="{{url('pembayaran')}}l"><i class="fa fa-check" aria-hidden="true"></i> Pembayaran </a></li>

									<li class="log_in">
										<a href="{{ url('logout') }}"
											onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
											<i class="fa fa-lock" aria-hidden="true"></i> 	Log out  
										</a>

										<form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
										</form>
									</li>
								@endif

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header middel-->
		<div class="header_middle">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<div class="logo">
							<a href="index.html"><img src="{{ url('admins/images/saline-small.png') }}" alt=""></a>
						</div>
					</div>
					<div class="col-lg-6">
						{{-- <div class="search_form">
							<form action="#">
								<input placeholder="Enter your search..." type="text">
								<div class="select_categories">
									<select name="select" id="categorie">
										<option selected value="1">All Categories</option>
										<option value="2">Electronics</option>
										<option value="3">--Laptops</option>
										<option value="4">---Dell Laptops</option>
										<option value="5">---HP Laptops</option>
										<option value="5">---Lenovo Laptops</option>
										<option value="5">--Camera</option>
										<option value="5">---Digital Cameras</option>
										<option value="5">---Apple Laptops</option>
										<option value="5">---Camcorders</option>
										<option value="5">---Photo Accessories</option>
										<option value="5">---Memory Cards</option>
										<option value="5">--Smart Phone</option>
										<option value="5">---Samsung Phones</option>
										<option value="5">---Motorola Phones</option>
										<option value="5">--Television</option>
										<option value="5">----Dresses</option>
										<option value="5">---Sweater</option>
										<option value="5">----Evening</option>
										<option value="5">---Day</option>
										<option value="5">---Sports</option>
										<option value="5">---Shoulder</option>
										<option value="5">---Satchels</option>
										<option value="5">---kids</option>
										<option value="5">---coats</option>
									</select>
								</div>
								<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

							</form>
						</div> --}}
					</div>
					<div class="col-lg-3">
						<div class="header_widget about_widget text-right">
							<ul>
								<li class="shopping_cart"><a href="#" title="View my shopping cart"><i class="fa fa-shopping-bag"></i></a> 
									<span class="cart__quantity">2</span>
									<div class="mini_cart cart_left">
										<div class="cart_item">
											<div class="cart_img">
												<a href="#"><img src="{{ url('pelanggan/img/cart/mini_cart1.jpg') }}" alt=""></a>
											</div>
											<div class="cart_info">
												<a href="#">Handbag feugiat</a>
												<span class="cart_price">$115.00</span>
												<span class="quantity">Qty: 1</span>
											</div>
											<div class="cart_remove">
												<a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
											</div>
										</div>
										<div class="cart_item">
											<div class="cart_img">
												<a href="#"><img src="{{ url('pelanggan/img/cart/mini_cart2.jpg') }}" alt=""></a>
											</div>
											<div class="cart_info">
												<a href="#">Handbag fringilla</a>
												<span class="cart_price">$115.00</span>
												<span class="quantity">Qty: 1</span>
											</div>
											<div class="cart_remove">
												<a title="Remove this item" href="#"><i class="fa fa-times-circle"></i></a>
											</div>
										</div>
										<div class="cart_price_line">
											<span> Shipping </span>
											<span class="prices">  $7.00  </span>
										</div>
										<div class="cart_total">
											<span> Shipping </span>
											<span class="prices">  $7.00  </span>
										</div>
										<div class="cart_button pt-20">
											<a href="checkout.html"> Check out</a>
										</div>
									</div>                                                                                                                                                               
								</li>
								<li><a href="wishlist.html" title="My wishlist"><i class="fa fa-heart-o"></i></a></li>
								<li><a href="#" title="My Compare"><i class="fa fa-exchange"></i></a></li>
							</ul>
							<!--mini cart-->
							
						</div>
						
					</div>
				</div>
			</div>
		</div> 
		<!--header bottom start--> 
		<div class="header_bottom sticky-header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="main_menu_inner">
							<div class="main_menu d-none d-lg-block">
								<nav>
									<ul>
										<li class="active">
                                            <a href="{{ url('/') }}">Home 
                                                {{-- <i class="fa fa-angle-down"></i> --}}
                                            </a>
											{{-- <ul class="sub_menu">
												<li class="active"><a href="index.html">home shop 1</a></li>
												<li><a href="index-2.html">home shop 2</a></li>
												<li><a href="index-3.html">home shop 3</a></li>
												<li><a href="index-4.html">home shop 4</a></li>
											</ul> --}}
                                        </li>
                                        <li>
                                            <a href="{{ url('paket') }}">Paket Rias 
                                            </a>
										</li>
										<li>
                                            <a href="{{ url('tentang-aplikasi') }}">Tentang Aplikasi 
                                            </a>
										</li>
										<li>
											<a href="{{ url('mari-bergabung') }}">Mari Bergabung
                                            </a>
										</li>
									</ul>
								</nav>
							</div>
							
							<div class="mobile-menu portfolio_mobail about d-lg-none">
								<nav>
										<ul>
										<li>
											<a href="index.html">Home</a>
											<ul>
												<li><a href="index.html">home shop 1</a></li>
												<li><a href="index-2.html">home shop 2</a></li>
												<li><a href="index-3.html">home shop 3</a></li>
												<li><a href="index-4.html">home shop 4</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Shop</a>
											<ul>
												<li><a href="shop-list.html">shop list</a></li>
												<li><a href="shop-fullwidth.html">shop Full Width Grid</a></li>
												<li><a href="shop-fullwidth-list.html">shop Full Width list</a></li>
												<li><a href="shop-right-sidebar.html">shop Right Sidebar</a></li>
												<li><a href="shop-right-sidebar-list.html">shop list Right Sidebar</a></li>
												<li><a href="single-product.html">Product Details</a></li>
												<li><a href="single-product-video.html">Product Details Video</a></li>
												<li><a href="single-product-gallery.html">Product Details Gallery</a></li>
											</ul>
										</li>
										<li><a href="portfolio.html">Portfolio</a>
											<ul>
												<li><a href="portfolio.html">Portfolio</a></li>
												<li><a href="portfolio-details.html">single portfolio</a> </li>
											</ul>
										</li>
										<li><a href="blog.html">Blog</a>
											<ul>
												<li><a href="blog.html">Blog</a></li>
												<li><a href="blog-fullwidth.html">Blog FullWidth</a></li>
												<li><a href="blog-sidebar.html">Blog  Sidebar</a></li>
												<li><a href="blog-details.html">Blog  Details</a></li>
											</ul>
										</li>
										<li><a href="about.html">About Us</a></li>

										<li><a href="contact.html">Contact Us</a></li>
										<li><a href="#">Features</a>
											<ul>
												<li><a href="#">Column1</a>
													<ul>
														<li><a href="shop.html">Shop </a></li>
														<li><a href="single-product.html">Product Details</a></li>
														<li><a href="cart.html">Cart </a></li>
														<li><a href="checkout.html">Checkout </a></li>
														<li><a href="wishlist.html">Wishlist</a></li>
														<li><a href="my-account.html">My account</a></li>
														<li><a href="login.html">Login</a></li>
													</ul>
												</li>
												<li><a href="#">Column2</a>
													<ul>
														<li><a href="blog.html">blog</a></li>
														<li><a href="blog-fullwidth.html">blog full width</a></li>
														<li><a href="blog-sidebar.html">blog  Sidebar </a></li>
														<li><a href="blog-details.html">blog details</a></li>
														<li><a href="404.html">404</a></li>
														<li><a href="faq.html">Frequently Questions</a></li>
														<li><a href="services.html">Service</a></li>
													</ul>
												</li>
												<li><a href="#">Column3</a>
													<ul>
														<li><a href="about.html">About Us</a></li>
														<li><a href="about-2.html">About Us 2</a></li>
														<li><a href="contact.html">Contact</a></li>
														<li><a href="contact-2.html">Contact us 2</a></li>
														<li><a href="portfolio.html">Portfolio</a></li>
														<li><a href="portfolio-details.html">Portfolio Details</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>  
	</div>
<!--header area end-->