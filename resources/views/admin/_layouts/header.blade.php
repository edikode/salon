<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
	<!-- start: TOP NAVIGATION CONTAINER -->
	<div class="container">
		<div class="navbar-header">
			<!-- start: RESPONSIVE MENU TOGGLER -->
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
				<span class="clip-menu-3"></span>
			</button>
			<!-- end: RESPONSIVE MENU TOGGLER -->
			<!-- start: LOGO -->
			<a class="navbar-brand" href="{{url('admin')}}">
				<img src="{{ asset('admins/images/saline-small.png')}}">
			</a>
			<!-- end: LOGO -->
		</div>
		<div class="navbar-tools">
			<!-- start: TOP NAVIGATION MENU -->
			<ul class="nav navbar-right">						
				<!-- start: USER DROPDOWN -->
				<li class="dropdown" style="margin-top: 8px;">
					<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
						<i class="clip-notification-2" style="color: white"></i>
						{{-- @if($jumlah>0)
							<span class="badge"> {{$jumlah}}</span>
						@endif --}}
					</a>
					<ul class="dropdown-menu notifications">
						<li>
							{{-- @if($jumlah>0)
								<span class="dropdown-menu-title"> Ada {{$jumlah}} Pemberitahuan</span>
							@else --}}
								<span class="dropdown-menu-title"> Tidak Ada Pemberitahuan Terbaru</span>
							{{-- @endif --}}
						</li>
						<li>
							<div class="drop-down-wrapper">
								<ul>
									{{-- @foreach($info_pemesanan as $info)
										@php 
										$kadaluarsa = waktuTour($info->tanggal_tour); 
										$detail_pemesanan = count(DetailPemesanan($info->id));

										if ($detail_pemesanan < 1) {
											break;
										}	
										@endphp
										
										@if($kadaluarsa > 0)
											<li>
												<a href="{{url('admin/reservasi/lihat/'.$info->id)}}" style="min-height: 50px;">
													<span class="label label-primary"><i class="clip-users"></i></span>
													<span class="message"> Pemesanan Paket Wisata oleh {{$info->nama}}</span>
													<span class="time"> {{waktuLalu($info->created_at)}}</span>
												</a>
											</li>
										@endif
									@endforeach

									@php
									foreach($info_konfirmasi as $info){
										$cekKonfirmasi = cekKonfirmasiStatus($info->invoice);
										if($info->konfirm == 0 && $cekKonfirmasi != "sudah"){
									@endphp
										<li>
											<a href="{{url('admin/konfirmasi/lihat/'.$info->id)}}" style="min-height: 50px;">
												<span class="label label-success"><i class="clip-users"></i></span>
												<span class="message"> Konfirmasi invoice {{$info->invoice}}</span>
												<span class="time"> {{waktuLalu($info->created_at)}}</span>
											</a>
										</li>
									@php
										}
									}
									@endphp

									@foreach($info_penarikan as $info)
										@php 
										$referral = Referral($info->referral_id); 
										
										@endphp
										<li>
											<a href="{{url('admin/referral/lihat/'.$info->referral_id)}}" style="min-height: 50px;">
												<span class="label label-orange"><i class="clip-banknote"></i></span>
												<span class="message"> Penarikan saldo oleh {{$referral->name}}</span>
												<span class="time"> {{waktuLalu($info->updated_at)}}</span>
											</a>
										</li>
									@endforeach --}}
								</ul>
							</div>
						</li>
						<li class="view-all">
							<a href="javascript:void(0)">
								Pemberitahuan <i class="fa fa-arrow-circle-o-right"></i>
							</a>
						</li>
					</ul>
				</li>
				
				@if (Auth::guest())
				<li class="dropdown" style="margin-top: 8px;">
					<a href="{{url('login')}}">
						<i class="clip-user"></i>
						&nbsp;Login
					</a>
				</li>	
				@else
				<li class="dropdown current-user">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<img src="{{asset('upload/admin/kecil/'.Auth::user()->gambar)}}" class="circle-img" alt="" width="30">
						<span class="username">{{ Auth::user()->nama }}</span>
						<i class="clip-chevron-down"></i>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="{{url('admin/data-admin/'.Auth::user()->id)}}">
								<i class="clip-user"></i>
								&nbsp;Profil
							</a>
						</li>
						<li>
							<a href="{{ url('admin/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="clip-exit"></i>
								&nbsp;Log Out
                            </a>

                            <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
						</li>
					</ul>
				</li>
				@endif
				<!-- end: USER DROPDOWN -->
			</ul>
			<!-- end: TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->