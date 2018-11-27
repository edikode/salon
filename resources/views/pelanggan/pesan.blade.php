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
                    <h1 class="text-white">Pesan Paket Rias</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Pesan Paket Rias</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
    </div>
<!-- inner page banner END -->
<div class="content-block">
    <!-- About Us -->
    <div class="section-full content-inner-2">
        <div class="container">
            <div id="smartwizard">
                <ul class="d-flex">
                    <li class="flex-fill"><a href="#time"><span><strong>1</strong><i class="fa fa-check"></i></span> Waktu</a></li>
                    {{-- <li class="flex-fill"><a href="#service"><span><strong>2</strong><i class="fa fa-check"></i></span> Layanan Rias</a></li> --}}
                    <li class="flex-fill"><a href="#details"><span><strong>2</strong><i class="fa fa-check"></i></span> Details</a></li>
                    <li class="flex-fill"><a href="#payment"><span><strong>3</strong><i class="fa fa-check"></i></span> Pembayaran</a></li>
                    <li class="flex-fill"><a href="#done"><span><strong>4</strong><i class="fa fa-check"></i></span> Selesai</a></li>
                </ul>

                <div>
                    
                    <div id="time" class="wizard-box">
                        <form action="{{url('simpan-pesanan')}}" method="POST" id="myform">
                            {{ csrf_field() }}
                            <h6 class="m-b30">Layanan Salon Rias:</h6>
                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-3 form-group">
                                    <label>Paket Rias</label>
                                    <select name="paket_id">
                                        <option value="{{$paket->id}}" >{{$paket->nama}}</option>
                                    </select>
                                </div>	
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Perias</label>
                                    <input type="text" class="form-control" name="pelapak" value="{{$paket->pelapak}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Pilih Tanggal Rias</label>
                                    {{-- <input name="tanggal" class="form-control" placeholder="Select Date" id="datetimepicker4" type="text" required> --}}
                                <input type="date" name="tanggal_rias" id="tanggal_rias" class="form-control" min="{{date("d/m/Y")}}" required>
                                </div>	
                                <div class="col-lg-2 col-md-6 col-sm-6 form-group">
                                    <label>Waktu Mulai</label>
                                    <select name="jam_mulai">
                                        <option value="8">8:00 WIB</option>
                                        <option value="9">9:00 WIB</option>
                                        <option value="10">10:00 WIB</option>
                                        <option value="11">11:00 WIB</option>
                                        <option value="12">12:00 WIB</option>
                                        <option value="13">13:00 WIB</option>
                                        <option value="14">14:00 WIB</option>
                                        <option value="15">15:00 WIB</option>
                                        <option value="16">16:00 WIB</option>
                                        <option value="17">17:00 WIB</option>
                                        <option value="18">18:00 WIB</option>
                                    </select>
                                </div>	
                                {{-- <div class="col-lg-2 col-md-6 col-sm-6 form-group">
                                    <label>Waktu Selesai</label>
                                    <select name="jam_Selesai">
                                        <option value="8">8:00 WIB</option>
                                        <option value="9">9:00 WIB</option>
                                        <option value="10">10:00 WIB</option>
                                        <option value="11">11:00 WIB</option>
                                        <option value="12">12:00 WIB</option>
                                        <option value="13">13:00 WIB</option>
                                        <option value="14">14:00 WIB</option>
                                        <option value="15">15:00 WIB</option>
                                        <option value="16">16:00 WIB</option>
                                        <option value="17">17:00 WIB</option>
                                        <option value="18">18:00 WIB</option>
                                    </select>
                                </div>	 --}}
                            </div>	
                        </div>
                        
                        <div id="details" class="">
                            <h6 class="m-b5">Detail</h6>
                            <p class="m-b0">Lengkapi detail Pemesanan salon</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" value="{{$pelanggan->nama}}">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$pelanggan->email}}">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="{{$pelanggan->telepon}}">
                                </div>

                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>RT/RW</label>
                                    <input type="text" class="form-control" name="rtrw" value="{{$pelanggan->rtrw}}">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Dusun</label>
                                    <input type="text" class="form-control" name="dusun" value="{{$pelanggan->dusun}}">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Desa</label>
                                    <input type="text" class="form-control" name="desa" value="{{$pelanggan->desa}}">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="{{$pelanggan->kecamatan}}">
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 form-group">
                                    <label>Kabupaten</label>
                                    <input type="text" class="form-control" name="kabupaten" value="{{$pelanggan->kabupaten}}">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Alamat Lengkap</label>
                                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                                </div>
                            </div>	
                        </div>

                        <div id="payment" class="">
                            <h6>Metode Pembayaran:</h6>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                    <p class="m-b0">Silahkan Transfer ke rekening kami sesuai dengan total yang kita tentukan :</p>
                                    <br>
                                    <h4 align="center">Rp. 100.123</h4>

                                    <br>
                                    <p align="justify">Nb: 3 digit terakhir adalah kode verifikasi untuk mengkonfirmasi pembayaran anda. Jika anda salah dalam mentranfer nominal dan tidak sesuai yang kita tentukan, anda harus melakukan konfirmasi secara manual / melalui CS Saline App. Agar pembayaran anda terkonfirmasi.</p>

                                    <h6>Kontak CS : {{$setting->telepon}}</h6>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 form-group">
                                    <img src="{{asset('admins/images/rekening.jpg')}}" alt="" style="max-width:300px">
                                </div>
                            </div>
                        </div>
                        <div id="done" class="">
                            <div class="successful-box text-center">
                                <div class="successful-check"><i class="ti-check"></i></div>
                                <h6>Pemesanan Paket Rias Selesai, Simpan Untuk melanjutkan.</h6>
                                <button type="submit" class="site-button">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection