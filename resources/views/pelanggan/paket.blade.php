@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')
			
	<div class="shipping_area shipping_two mb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="single_shipping single_sp_two">
						<div class="shippin_icone icone_two">
							<i class="fa fa-truck"></i>
						</div>
						<div class="shipping_content sp_c_two">
							<h3>Free shipping on orders over $100</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="single_shipping single_sp_two">
						<div class="shippin_icone icone_two">
							<i class="fa fa-history"></i>
						</div>
						<div class="shipping_content sp_c_two">
							<h3>30-day returns money back guarantee</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="single_shipping single_sp_two box3">
						<div class="shippin_icone icone_two">
							<i class="fa fa-headphones"></i>
						</div>
						<div class="shipping_content sp_c_two">
							<h3>24/7 online support consultations</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--shipping area end-->  
	
	<!--categorie details start-->
	<div class="categorie_details">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="sidebar_categorie_area">
						{{-- <div class="categories_menu categorie_page_menu mb-30">
							<div class="categories_title ca_title_two">
								<h2 class="categori_toggle"><img src="{{ url('pelanggan/img/logo/categorie.png') }}" alt=""> All categories</h2>
							</div>
							<div class="categories_menu_inner categorie_inner">
								<ul>
									<li><a href="#"><i class="fa fa-caret-right"></i> Electronics <i class="fa fa-angle-right"></i></a>
										<ul class="categories_mega_menu categorie_mega_two">
											<li><a href="#">Laptops</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Dell Laptops</a></li>
														<li><a href="#">HP Laptops</a></li>
														<li><a href="#">Lenovo Laptops</a></li>
														<li><a href="#">Apple Laptops</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Camera</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Digital Cameras</a></li>
														<li><a href="#">Camcorders</a></li>
														<li><a href="#">Photo Accessories</a></li>
														<li><a href="#">Memory Cards</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Smart Phone</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Apple Phones</a></li>
														<li><a href="#">Samsung Phones</a></li>
														<li><a href="#">Motorola Phones</a></li>
														<li><a href="#">Lenovo Phones</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Television</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">All-in-One Computers</a></li>
														<li><a href="#">Towers Only</a></li>
														<li><a href="#">Refurbished Desktops</a></li>
														<li><a href="#">Gaming Desktops</a></li>
													</ul>
												</div>
											</li>
										

										</ul>
									</li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Fashion  <i class="fa fa-angle-right"></i></a>
										<ul class="categories_mega_menu categorie_mega_two">
											<li><a href="#">Dresses</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Sweater</a></li>
														<li><a href="#">Evening</a></li>
														<li><a href="#">Day</a></li>
														<li><a href="#">Sports</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Handbags</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Shoulder</a></li>
														<li><a href="#">Satchels</a></li>
														<li><a href="#">kids</a></li>
														<li><a href="#">coats</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">shoes</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Ankle Boots</a></li>
														<li><a href="#">Clog sandals </a></li>
														<li><a href="#">run</a></li>
														<li><a href="#">Books</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Clothing</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Coats  Jackets </a></li>
														<li><a href="#">Raincoats</a></li>
														<li><a href="#">Jackets</a></li>
														<li><a href="#">T-shirts</a></li>
													</ul>
												</div>
											</li>

										</ul>
									</li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
										<ul class="categories_mega_menu categorie_mega_two decor">
											<li><a href="#">Chair</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Dining room</a></li>
														<li><a href="#">bedroom</a></li>
														<li><a href="#"> Home & Office</a></li>
														<li><a href="#">living room</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Lighting</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Ceiling Lighting</a></li>
														<li><a href="#">Wall Lighting</a></li>
														<li><a href="#">Outdoor Lighting</a></li>
														<li><a href="#">Smart Lighting</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Sofa</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Fabric Sofas</a></li>
														<li><a href="#">Leather Sofas</a></li>
														<li><a href="#">Corner Sofas</a></li>
														<li><a href="#">Sofa Beds</a></li>
													</ul>
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Toys & Hobbies <i class="fa fa-angle-right"></i></a>
										<ul class="categories_mega_menu categorie_mega_two hobbies">
											<li><a href="#">Boys' Toys</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Building Toys</a></li>
														<li><a href="#">Electronics Toys</a></li>
														<li><a href="#">action figures </a></li>
														<li><a href="#">specialty & boutique toy</a></li>
													</ul>
												</div>
											</li>
											<li><a href="#">Girls' Toys</a>
												<div class="categorie_sub_menu">
													<ul>
														<li><a href="#">Dolls for Girls</a></li>
														<li><a href="#">Girls' Learning Toys</a></li>
														<li><a href="#">Arts and Crafts for Girls</a></li>
														<li><a href="#">Video Games for Girls</a></li>
													</ul>
												</div>
											</li>

										</ul>
									</li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Accessories</a></li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Jewelry & Watches</a></li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Health & Beauty</a></li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Books & Office</a></li>
									<li><a href="#"><i class="fa fa-caret-right"></i> Sport & Outdoor</a></li>
									<li id="cat_toggle" class="has-sub"><a href="#"><i class="fa fa-caret-right"></i> More Categories</a>
										<ul class="categorie_sub">
											<li><a href="#"><i class="fa fa-caret-right"></i> Computer - Laptop</a></li>
										</ul>   

									</li>
								</ul>
							</div>
						</div> --}}
						{{-- <div class="sidebar_categorie_item">
							<div class="categorie__titile">
								<h2>Price</h2>
							</div>
							<div class="categorie_filter">
								<div class="ca_search_filters">
									<label for="amount"> Range:</label>
									<input type="text" name="text" id="amount" />  
									<div id="slider-range"></div>   
								</div>
							</div>
						</div> --}}
						<div class="product_banner product_banner_shop fix mb-30">
							<a href="#"><img src="pelanggan/img/banner/banner1.jpg" alt=""></a>
						</div>
						{{-- <div class="top_sellers top_seller_two featured mb-40">
							<div class="top_title">
								<h2> Paket Lain</h2>
							</div>
							<div class="small_product_active owl-carousel">
								<div class="small_product_item">
									@foreach ($paket as $p)
									<div class="small_product">
										<div class="small_product_thumb">
											<a href="single-product.html"><img src="assets/img/cart/cart13.jpg" alt=""></a>
											<div class="product_discount">
												<span>-10%</span>
											</div>
										</div>
										<div class="small_product_content">
											<div class="samll_product_ratting">
												<ul>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<div class="small_product_name">
												<a title="Printed Summer Dress" href="single-product.html">{{$p->nama}}</a>
											</div>
											<div class="small_product_price">
												<span class="new_price"> $27.00 </span>
												<span class="old_price">  $30.50  </span>
											</div>
										</div>
									</div>
									@endforeach
								</div>
								<div class="small_product_item">
									<div class="small_product">
										<div class="small_product_thumb">
											<a href="single-product.html"><img src="assets/img/cart/cart4.jpg" alt=""></a>
											<div class="product_discount">
												<span>-10%</span>
											</div>
										</div>
										<div class="small_product_content">
											<div class="samll_product_ratting">
												<ul>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<div class="small_product_name">
												<a title="Printed Summer Dress" href="single-product.html">Printed Dress</a>
											</div>
											<div class="small_product_price">
												<span class="new_price"> $27.00 </span>
												<span class="old_price">  $30.50  </span>
											</div>
										</div>
									</div>
									<div class="small_product">
										<div class="small_product_thumb">
											<a href="single-product.html"><img src="assets/img/cart/cart10.jpg" alt=""></a>
										</div>
										<div class="small_product_content">
											<div class="samll_product_ratting">
												<ul>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<div class="small_product_name">
												<a title="Printed Summer Dress" href="single-product.html">Faded T-shirt</a>
											</div>
											<div class="small_product_price">
												<span class="new_price"> $27.00 </span>
											</div>
										</div>
									</div>
									<div class="small_product">
										<div class="small_product_thumb">
											<a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
											<div class="product_discount">
												<span>-10%</span>
											</div>
										</div>
										<div class="small_product_content">
											<div class="samll_product_ratting">
												<ul>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
											<div class="small_product_name">
												<a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
											</div>
											<div class="small_product_price">
												<span class="new_price"> $27.00 </span>
												<span class="old_price">  $30.50  </span>
											</div>
										</div>
									</div>
									<div class="small_product">
										<div class="small_product_thumb">
											<a href="single-product.html"><img src="assets/img/cart/cart7.jpg" alt=""></a>
										</div>
										<div class="small_product_content">
											<div class="samll_product_ratting">
												<ul>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
												<div class="small_product_name">
												<a title="Printed Summer Dress" href="single-product.html">Summer Dress</a>
											</div>
											<div class="small_product_price">
												<span class="new_price"> $27.00 </span>
												<span class="old_price">  $30.50  </span>
											</div>
										</div>
									</div>
									<div class="small_product">
										<div class="small_product_thumb">
											<a href="single-product.html"><img src="assets/img/cart/cart8.jpg" alt=""></a>
											<div class="product_discount">
												<span>-10%</span>
											</div>
										</div>
										<div class="small_product_content">
											<div class="samll_product_ratting">
												<ul>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
													<li><a href="#"><i class="fa fa-star"></i></a></li>
												</ul>
											</div>
												<div class="small_product_name">
												<a title="Printed Summer Dress" href="single-product.html">Printed  Dress</a>
											</div>
											<div class="small_product_price">
												<span class="new_price"> $27.00 </span>
												<span class="old_price">  $30.50  </span>
											</div>
										</div>
									</div>    
								</div>  
							</div>
						</div> --}}
					</div>
				</div>
				<div class="col-lg-9 col-md-8">
					<div class="categorie_d_right">
						<div class="single_slider single_sl_categorie" style="background-image: url({{ url('pelanggan/img/slider/slider9.jpg') }})">
						
						</div>
						<div class="categorie_product_toolbar mb-30">
							<div class="categorie_product_button">
								{{-- <ul class="nav" role="tablist">
									<li>
										<a data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
									</li>
									<li>
										<a class="active" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="fa fa-th-list"></i></a>
									</li>
								</ul> --}}
								<p>Tampil 10 dari {{count($paket)}} Paket</p>
							</div>
							{{-- <form action="#">
								<label>Sort By</label>
								<select name="orderby" id="short">
									<option selected value="1">Default sorting</option>
									<option value="1">Sort by popularity</option>
									<option value="1">Sort by average rating</option>
									<option value="1">Sort by rating</option>
									<option value="1">Sort by price: low to high</option>
									<option value="1">Sort by price: high to low</option>
									<option value="1">Price: Lowest first</option>
									<option value="1">Product Name: A to Z</option>
									<option value="1">In stock</option>
									<option value="1">Reference: Lowest first</option>
									<option value="1">Reference: Highest first</option>
								</select>
							</form> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="list" role="tabpanel">
							<div class="row">
								@foreach ($paket as $p)
									<div class="col-md-6">
										<div class="single_product categorie">   
											<div class="row cate_tab_product">
												<div class="col-lg-4 col-md-6 col-sm-6">
													<div class="product_thumb">
														<a href="#" data-toggle="modal" data-target="#detail{{$p->id}}"><img src="{{asset('upload/paket/kecil/'.$p->gambar)}}" alt=""></a>

														<div class="quick_view categorie_view">
														<a href="#" data-toggle="modal" data-target="#detail{{$p->id}}" title="Detail"><i class="fa fa-search"></i></a>
														</div>

													</div>
												</div>
												<div class="col-lg-8 col-md-6 col-sm-6">
													<div class="product_content">
														<div class="samll_product_ratting">
															<ul>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
																<li><a href="#"><i class="fa fa-star"></i></a></li>
															</ul>
														</div>
														<div class="small_product_name categorie_name">
															<a href="#" data-toggle="modal" data-target="#detail{{$p->id}}" title="Detail"> {{$p->nama}} </a>
														</div>
														<div class="small_product_price categorie_prie mb-10">
															<span class="new_price"> Rp. {{$p->harga}} </span>
															{{-- <span class="old_price">  $150.50  </span> --}}
														</div>
														<div class="single__product_drsc">
															<p> {{$p->deskripsi}}</p>
														</div>
														<div class="product_action action_categorie mb-10">
															<ul>
																<li><a href="#" title=" Sukai "><i class="fa fa-heart"></i></a></li>
																<li><a href="#" title=" Pemilik salon "><i class="fa fa-user"></i></a></li>
																<li><a href="#" title=" Pesan Sekarang "><i class="fa fa-shopping-cart"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div> 
										</div> 

										<div class="modal fade" id="detail{{$p->id}}" tabindex="-1" role="dialog"  aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
													<div class="modal_body">
														<div class="container">
															<div class="row">
																<div class="col-lg-5 col-md-5 col-sm-12">
																	<div class="modal_tab">  
																		<div class="tab-content" id="pills-tabContent">
																			<div class="tab-pane fade show active" id="tab1" role="tabpanel" >
																				<div class="modal_tab_img">
																				<a href="#"><img src="{{ asset('upload/paket/sedang/'.$p->gambar) }}" alt="{{$p->nama}}"></a>    
																				</div>
																			</div>
																		</div>
																	</div>  
																</div> 
																<div class="col-lg-7 col-md-7 col-sm-12">
																	<div class="modal_right">
																		<div class="modal_title mb-10">
																			<h2>{{$p->nama}}</h2> 
																		</div>
																		<div class="modal_price mb-15">
																			<span class="new_price"> Rp. {{$p->harga}}</span>   
																		</div>
																		<a href="{{url('pesan')}}" class="btn btn-info mb-15">Pesan Sekarang</a>
																		
																		<div class="modal_description mb-15">
																			@php echo $p->teks @endphp   
																		</div> 
																		<div class="product_action action_categorie mb-10">
																			<ul>
																				<li><a href="#" title=" Sukai "><i class="fa fa-heart"></i></a></li>
																				<li><a href="#" title=" Pemilik salon "><i class="fa fa-user"></i></a></li>
																				<li><a href="#" title=" Pesan Sekarang "><i class="fa fa-shopping-cart"></i></a></li>
																			</ul>
																		</div>
																	</div>    
																</div>    
															</div>     
														</div>
													</div>    
												</div>
											</div>
										</div> 
									</div>
								@endforeach
							</div>
						</div>
					</div>
					
					<div class="page_numbers_toolbar">
						<ul>
							<li><a class="current_page" href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a class="next_page" href="#">next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--categorie details end-->
	
@endsection