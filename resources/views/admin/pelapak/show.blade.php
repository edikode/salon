@extends('admin/_layouts.template')

@section('title', 'Detail Pelapak')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Detail Pelapak</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('admin/pelapak') }}">Kembali</a>
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
								<h4>{{$pelapak->nama}}</h4>
								@if($pelapak->gambar != "")
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
											<img src="{{ asset('upload/pelapak/kecil/'.$pelapak->gambar) }}">
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
									<td>Email</td>
									<td>
									<a href="mailto:{{$pelapak->email}}">
										{{$pelapak->email}}
									</a></td>
									<td></td>
								</tr>
								<tr>
									<td>Telepon</td>
									<td>{{$pelapak->telepon}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
									<td>{{$pelapak->tempat_lahir}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>{{$pelapak->tanggal_lahir}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>{{$pelapak->alamat}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Status</td>
									<td>
										@if ($pelapak->status == 1)
											<span class="label label-sm label-info">Aktif</span>
										@else
											<span class="label label-sm label-danger">Tidak Aktif</span>
										@endif
									</td>
									<td><a data-toggle="modal" role="button" href="#edit" class="show-tab"><i class="clip-pencil edit-user-info"></i></a></td>
								</tr>
								<tr>
									<td>Tanggal Pendaftaran</td>
									<td>{{tgl_id($pelapak->created_at)}}</td>
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

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{ url('admin/pelapak', $pelapak->id) }}" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Edit Data Pelapak</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								{{-- @include('errors/pesan_modal')								 --}}
							</div>
							<div class="col-md-12">
								<div class='form-group'>
									<label class='control-label'>Nama</label>
									<select name="status" id="status" class="form-control">
										<option value="1" @if($pelapak->status == 1)selected @endif>Aktif</option>
										<option value="2" @if($pelapak->status == 2)selected @endif>Non Aktif</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						{{ csrf_field() }}	
						<button aria-hidden="true" data-dismiss="modal" class="btn btn-red">
							Kembali
						</button>		
						<input type="hidden" name="_method" value="PUT">	
						<input name="simpan" value="Simpan" type="submit" class="btn btn-green">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection

