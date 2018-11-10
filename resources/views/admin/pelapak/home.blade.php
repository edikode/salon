@extends('admin/_layouts.template')

@section('title', 'Data Pelapak')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Data Pelapak</li>
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
						<form action="{{ url('admin/pelapak/cari') }}" method="get" enctype="multipart/form-data">
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
								<th>Nama</th>
								<th>Email</th>
								<th>Telepon</th>
								<th>Alamat</th>
								<th class="pilihan">Pilihan</th>								
							</tr>
						</thead>
						<tbody>

							<?php 
								$tampil_data = 1;  
								$i = ($pelapak->currentpage()-1)* $pelapak->perpage() + 1;
							?>

							@foreach($pelapak as $p)
								<tr>
									<td class='center'>{{$i++}}</td>
									<td>{{$p->nama}}</td>
									<td>{{$p->email}}</td>
									<td>{{$p->telepon}}</td>
									<td>{{$p->alamat}}</td>
									<td>
										<a data-original-title='Detail' class='btn btn-green tooltips' href='{{ url('admin/pelapak/'. $p->id)}}'>
											<i class='clip-eye'></i>
										</a>
										
										<form action="{{url('admin/pelapak', $p->id)}}" method="post" style="display: inline-block;">
											{{ csrf_field() }}	
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" data-original-title='Hapus' class="btn btn-red tooltips" onclick='return konfirmasi()'><i class="clip-remove"></i></button>
										</form>
									</td>											
								</tr>
								<?php $tampil_data++;	?>

							@endforeach

							@if(count($pelapak) < 1)
								<tr>
									<td colspan="6" align="center"><strong>--- Data tidak ada ---</strong></td>
								</tr>
							@endif

						</tbody>
					</table>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							<h5>Tampil : {{$tampil_data-1}} dari {{count($pelapak)}} data.</h5>
						</div>
						<div class="col-sm-6" >
							<div style="float: right;">
								{{ $pelapak->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection
