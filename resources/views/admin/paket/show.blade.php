@extends('admin/_layouts.template')

@section('title', 'Detail Paket')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Detail Paket</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('admin/paket') }}">Kembali</a>
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
								<h4>{{$paket->nama}}</h4>
								@if($paket->gambar != "")
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
											<img src="{{ asset('upload/paket/kecil/'.$paket->gambar) }}">
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
									<th colspan="3">Detail Paket</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Nama Paket</td>
									<td>{{$paket->nama}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Link Paket</td>
									<td>{{$paket->link}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Deskripsi Paket</td>
									<td>{{$paket->deskripsi}}</td>
									<td></td>
								</tr>
								<tr>
									<td>Teks</td>
									<td>@php echo $paket->teks; @endphp</td>
									<td></td>
								</tr>
								
								<tr>
									<td>Status</td>
									<td>
										@if ($paket->tampil == 1)
											<span class="label label-sm label-info">Ditampilkan</span>
										@else
											<span class="label label-sm label-danger">Tidak Ditampilkan</span>
										@endif
									</td>
									<td></td>
								</tr>
								<tr>
									<td>Dilihat</td>
									<td>{{$paket->dilihat}} x</td>
									<td></td>
								</tr>
								<tr>
									<td>Tanggal Ditambahkan</td>
									<td>{{tgl_id($paket->created_at)}}</td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td>
										<a data-original-title='Edit' class='btn btn-blue btn-sm tooltips' href='{{ url('admin/paket/'. $paket->id .'/edit')}}'>
											<i class='clip-pencil'></i> Edit
										</a>
									</td>
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
				<form action="{{ url('admin/paket', $paket->id) }}" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Edit Data paket</h4>
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
										<option value="1" @if($paket->status == 1)selected @endif>Aktif</option>
										<option value="2" @if($paket->status == 2)selected @endif>Non Aktif</option>
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

