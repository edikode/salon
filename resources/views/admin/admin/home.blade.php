@extends('admin/_layouts.template')

@section('title', 'Data Admin')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Data Admin</li>
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
								<th>Email</th>
								<th>Status</th>
								<th class="pilihan">Pilihan</th>								
							</tr>
						</thead>
						<tbody>

							<?php $i = 1; ?>

							@foreach($admin as $admin)
							
							<tr>
								<td class='center'>{{$i++}}</td>
								<td>{{$admin->nama}}</td>
								<td>{{$admin->email}}</td>
								<td>
									@if ($admin->status == 1)
										<span class="label label-sm label-info">Aktif</span>
									@else
										<span class="label label-sm label-danger">Tidak Aktif</span>
									@endif		
								</td>
								<td>
									<a data-original-title='Detail' class='btn btn-green tooltips' href='{{ url('admin/data-admin/'. $admin->id)}}'>
										<i class='clip-eye'></i>
									</a>

									<a data-original-title='Edit' class='btn btn-blue tooltips' href='{{ url('admin/data-admin/'. $admin->id .'/edit')}}'>
										<i class='clip-pencil'></i>
									</a>
									
									<form action="{{url('admin/data-admin', $admin->id)}}" method="post" style="display: inline-block;">
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
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="{{url('admin/data-admin')}}" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Tambah Admin</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								{{-- @include('errors/pesan_modal')								 --}}
							</div>
							<div class="col-md-12">
								<div class='form-group @if($errors->has('nama')) has-error @endif'>
									<label class='control-label'>Nama</label>
									<input type='text' placeholder='Nama' class='form-control limited' id='nama' name='nama' maxlength='45' value='@if(count($errors) > 0){{old('nama')}}@endif'
									required>

									@if ($errors->has('nama'))
										<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
									@endif
								</div>
								<div class='form-group @if($errors->has('email')) has-error @endif'>
									<label class='control-label'>Email</label>
									<input type='email' placeholder='Email' class='form-control limited' id='email' name='email' maxlength='45' value='@if(count($errors) > 0){{old('email')}}@endif'
									required>

									@if ($errors->has('email'))
										<span for="email" class="help-block">{{ $errors->first('email') }}</span>
									@endif
								</div>
								<div class='form-group @if($errors->has('password')) has-error @endif'>
									<label class='control-label'>Password</label>
									<input type='password' placeholder='Password' class='form-control' id='password' name='password' value='@if(count($errors) > 0){{old('password')}}@endif'
									required>

									@if ($errors->has('password'))
										<span for="password" class="help-block">{{ $errors->first('password') }}</span>
									@endif
								</div>
								<div class='form-group @if($errors->has('password-confirm')) has-error @endif'>
									<label class='control-label'>Ulangi Password</label>
									<input type='password' placeholder='' class='form-control' id='password-confirm' name='konfirmasiPassword' value='@if(count($errors) > 0){{old('password-confirm')}}@endif'
									required>

									@if ($errors->has('password-confirm'))
										<span for="password-confirm" class="help-block">{{ $errors->first('password-confirm') }}</span>
									@endif
								</div>
								<div class="form-group">
									<label>Foto</label>
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
