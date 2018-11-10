@extends('admin/_layouts.template')

@section('title', 'Detail Admin')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Detail Admin</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('admin/data-admin') }}">Kembali</a>
@endsection

@section('main')

<div class="row">
	<div class="col-sm-12">
		@include('errors/pesan_error')
	</div>
	<div class="col-sm-12">				
		<div class="panel panel-default">
			<div class="panel-body">	
				<div class="row">
					<div class="col-sm-5 col-md-4">
						<div class="user-left">
							<div class="center">
								<h4>{{$admin->nama}}</h4>
								@if($admin->gambar != "")
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
											<img src="{{ asset('upload/admin/kecil/'.$admin->gambar) }}">
										</div>										
									</div>
								@else
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
											<img src="{{ asset('assets/images/200x200.jpg') }}">
										</div>										
									</div>
								@endif
								{{-- <hr>
								<p>
									<a class="btn btn-twitter btn-sm btn-squared">
										<i class="fa fa-twitter"></i>
									</a>
									<a class="btn btn-linkedin btn-sm btn-squared">
										<i class="fa fa-linkedin"></i>
									</a>
									<a class="btn btn-google-plus btn-sm btn-squared">
										<i class="fa fa-google-plus"></i>
									</a>
									<a class="btn btn-github btn-sm btn-squared">
										<i class="fa fa-github"></i>
									</a>
								</p>
								<hr> --}}
							</div>
						</div>
					</div>
					<div class="col-sm-7 col-md-8">
						<br><br>
						<table class="table table-condensed table-hover">
							<thead>
								<tr>
									<th colspan="3">Informasi Kontak</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Nama</td>
									<td>{{$admin->nama}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>
									<a href="mailto:{{$admin->email}}">
										{{$admin->email}}
									</a></td>
									<td></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>
										@if ($admin->status == 1)
											<span class="label label-sm label-info">Aktif</span>
										@else
											<span class="label label-sm label-danger">Tidak Aktif</span>
										@endif
									</td>
									<td></td>
								</tr>
								<tr>
									<td>Tanggal Ditambahkan</td>
									<td>{{tgl_id($admin->created_at)}}</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>				
	</div>		
</div>

@endsection

