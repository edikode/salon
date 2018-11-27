@extends('admin/_layouts.template')

@section('title', 'Data Pemesanan')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Data Pemesanan</li>
@endsection

@section('main')

	<div class="row">
		<div class="col-sm-12">	
			@include('errors/pesan_error')
		</div>
		<div class="col-sm-12">
			<div class="clear panel panel-default">				
				<div class="panel-body">
					<div class="row">
						<form action="{{ url('admin/pemesanan/cari') }}" method="get" enctype="multipart/form-data">
							<div class="col-sm-2">
								<select name="filter" id="" class="form-control">
									<option value="">Pilih Filter</option>
									<option value="nama" @if($filter == "nama") selected @endif>Nama</option>
									<option value="alamat" @if($filter == "alamat") selected @endif>Alamat</option>
								</select>
							</div>
							<div class="col-sm-3">
							<input type="text" name="keyword" placeholder="Cari" class="form-control" value="{{$keyword}}">
							</div>
							<div class="col-sm-1">
								<button type="submit" class="btn btn-primary"> Cari</button>
							</div>
						</form>
					</div>
					<br>
					<table class="table table-striped table-bordered table-hover table-full-width" id="">
						<thead>
							<tr>			
								<th class="no">No</th>
								<th>Invoice</th>
								<th>Tanggal Rias</th>
								<th>Pelanggan</th>
								<th>Paket Pesanan</th>
								<th>Alamat</th>
								<th>Status</th>
								<th class="pilihan">Pilihan</th>								
							</tr>
						</thead>
						<tbody>

							<?php 
								$tampil_data = 1;  
								$i = ($pemesanan->currentpage()-1)* $pemesanan->perpage() + 1;
							?>

							@foreach($pemesanan as $p)
								<tr>
									<td class='center'>{{$i++}}</td>
									<td class='center'>{{$p->kode}}</td>
									<td>
										{{tgl_id($p->tanggal_rias)}}, <br>
										Pukul {{$p->jam_mulai}}:00 WIB
									</td>
									<td>
										{{$p->nama}}, {{$p->telepon}}
									</td>
									<td>
										{{$p->nama_paket}}
									</td>
									<td>
										RT/RW. {{$p->rtrw}}, Dsn. {{$p->dusun}} <br>
										Ds. {{$p->desa}}, Kec. {{$p->kecamatan}}, Kab. {{$p->kabupaten}} <br>
										( {{$p->alamat}} )
									</td>
									<td>
										@if ($p->status == 1)
											<span class='label label-success'>Selesai</span>
										@elseif($p->status == 0)
											<span class='label label-danger'>Belum Konfirmasi</span>
										@endif
									</td>
									<td>
										<a data-original-title='Konfirmasi' class='btn btn-blue tooltips' href='{{ url('admin/pemesanan/konfirmasi/'. $p->kode)}}'>
											<i class='clip-banknote'></i>
										</a>
										<a data-original-title='Detail' class='btn btn-green tooltips' href='{{ url('admin/pemesanan/'. $p->kode)}}'>
											<i class='clip-eye'></i>
										</a>
										
										<form action="{{url('admin/pemesanan', $p->kode)}}" method="post" style="display: inline-block;">
											{{ csrf_field() }}	
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" data-original-title='Hapus' class="btn btn-red tooltips" onclick='return konfirmasi()'><i class="clip-remove"></i></button>
										</form>
									</td>											
								</tr>
								<?php $tampil_data++;	?>

							@endforeach

							@if(count($pemesanan) < 1)
								<tr>
									<td colspan="6" align="center"><strong>--- Data tidak ada ---</strong></td>
								</tr>
							@endif

						</tbody>
					</table>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							<h5>Tampil : {{$tampil_data-1}} dari {{count($pemesanan)}} data.</h5>
						</div>
						<div class="col-sm-6" >
							<div style="float: right;">
								{{ $pemesanan->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection
