@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')
	
	<div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('pelanggan/images/banner/bnr2.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Status Pemesanan</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Status Pemesanan</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>

        <div class="content-block">
            <div class="section-full content-inner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="sticky-top">
                                <ul class="service-list m-b30">    
                                    <li @if ($pemesanan) class="active"  @endif><a href="{{url('status/pembayaran')}}">Pembayaran</a></li>
                                    <li @if (!$pemesanan >= 1) class="active"  @endif><a href="{{url('status/proses-rias')}}">Proses Rias</a></li>
                                    <li><a href="{{url('status/review')}}">Review</a></li>
                                </ul>
                                {{-- <div class="download-brochure m-b30 ">
                                    <h4>Brochure</h4>
                                    <p>Working from home meant we could vary snack and coffee breaks.</p>
                                    <a href="#" class="site-button">Download PDF</a>
                                </div> --}}
                            </div>
                        </div>		
                        <div class="col-lg-9 col-md-8">
                            @if ($pemesanan)
                                @foreach ($pemesanan as $p)
                                    @if ($p->status == 0)
                                        <h2 class="m-t0 m-b10 fw6">Status Pembayaran</h2>
                                        <h6>Metode Pembayaran:</h6>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                                <p class="m-b0">Silahkan Transfer ke rekening kami sesuai dengan total yang kita tentukan :</p>
                                                <br>
                                                <h4 align="center">Rp. {{angkaRupiah($pemesanan->total)}}</h4>

                                                <br>
                                                <p align="justify">Nb: 3 digit terakhir adalah kode verifikasi untuk mengkonfirmasi pembayaran anda. Jika anda salah dalam mentranfer nominal dan tidak sesuai yang kita tentukan, anda harus melakukan konfirmasi secara manual / melalui CS Saline App. Agar pembayaran anda terkonfirmasi.</p>

                                                <h6>Kontak CS : {{$setting->telepon}}</h6>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                                <img src="{{asset('admins/images/rekening.jpg')}}" alt="" style="max-width:300px">
                                            </div>
                                        </div>
                                    @elseif($p->status == 1)
                                        <h2 class="m-t0 m-b10 fw6">Status Pembayaran</h2>
                                        <h6>Pembayaran Selesai Dilakukan</h6>
                                    @endif

                                    <hr>
                                @endforeach
                                
                            @else 
                                <h2 class="m-t0 m-b10 fw6">Status Pembayaran Tidak Ada</h2>
                                <h6>Belum Pernah Melakukan Proses pemesanan Rias</h6>
                            @endif
                            
                            
                        </div>		
                    </div>
                </div>
            </div>
        </div>

	</div>


@endsection