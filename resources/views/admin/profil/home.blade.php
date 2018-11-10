@extends('admin/_layouts.template')

@section('title', 'Profil Aplikasi')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Profil Aplikasi</li>
@endsection

@section('button', '<a class="btn btn-large btn-green item" data-toggle="modal" role="button" href="#tambah">Tambah</a>')

@section('main')

	<div class="row">
		<div class="col-sm-12">	
			@include('errors/pesan_error')
		</div>
		<div class="col-sm-12">
			<div class="clear panel panel-default">						
				<div class="panel-body">
					<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
						<thead>
							<tr>			
								<th class="no">No</th>
								<th>Nama</th>
								<th class="pilihan">Pilihan</th>								
							</tr>
						</thead>
						<tbody>

							<?php $i = 1; ?>

							@foreach($profil as $profil)
							
							<tr>
								<td class='center'>{{$i++}}</td>
								<td>{{$profil->nama}}</td>
								<td>
									{{-- @if($profil->tampil == 1) 
										<a data-original-title='Non Aktifkan' class='btn btn-green tooltips' href='{{ url('admin/profil/nonaktif', $profil->id)}}'  onclick='return nonaktif()'>
										<i class='clip-eye'></i>
									</a>
									@else
										<a data-original-title='Aktifkan' class='btn btn-default tooltips' href='{{ url('admin/profil/aktif', $profil->id)}}'  onclick='return aktif()'><i class='clip-eye-2'></i></a>
									</a>
									@endif --}}

									<a data-original-title='Edit' class='btn btn-blue tooltips' href='{{ url('admin/profil/'. $profil->id .'/edit')}}'>
										<i class='clip-pencil'></i>
									</a>
									
									<form action="{{url('admin/profil', $profil->id)}}" method="post" style="display: inline-block;">
										{{ csrf_field() }}	
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" data-original-title='Hapus' class="btn btn-red tooltips" onclick='return konfirmasi()'><i class="clip-remove"></i></button>
									</form>
								</td>											
							</tr>

							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>		
	</div>

	<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-crud">
			<div class="modal-content">
				<form action="{{url('admin/profil')}}" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Tambah profil</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								{{-- @include('errors/pesan_modal')								 --}}
							</div>
							<div class="col-md-12">
								<div class='form-group @if($errors->has('nama')) has-error @endif'>
									<label class='control-label'>Nama</label>
									<input type='text' placeholder='Nama' class='form-control limited' id='nama' name='nama' maxlength='100' value='@if(count($errors) > 0){{old('nama')}}@endif'
									required>

									@if ($errors->has('nama'))
										<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
									@endif
								</div>
								<div class='form-group'>
									<label class='control-label'>Deskripsi</label>
									<textarea class='form-control limited' id='deskripsi' cols='10' rows='4' name='deskripsi' style='height:75px; resize:none;' maxlength='160'>@if(count($errors) > 0){{old('deskripsi')}}@endif</textarea>
								</div>
								<div class='form-group'>
									<label class='control-label'>Teks</label>
									<textarea class='ckeditor' id='ckeditor' name='teks'>@if(count($errors) > 0){{old('teks')}}@endif</textarea>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="{{ asset('assets/images/400x300.jpg') }}" alt=""/>
										</div>
										<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 400px; max-height: 300px; line-height: 20px;"></div>
										<div>
											<span class="btn btn-orange btn-file"><span class="fileupload-new">Pilih Gambar</span><span class="fileupload-exists">Ganti</span>
												<input type="file" name="gambar">
											</span>
											<a href="#" class="btn fileupload-exists btn-orange" data-dismiss="fileupload">
												Hapus
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						{{ csrf_field() }}	
						<button aria-hidden="true" data-dismiss="modal" class="btn btn-red">
							Kembali
						</button>			
						<input name="simpan" value="Simpan" type="submit" class="btn btn-green">
					</div>
				</form>
			</div>
		</div>
	</div>

@endsection
