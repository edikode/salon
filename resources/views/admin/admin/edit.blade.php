@extends('admin/_layouts.template')

@section('title', 'Edit Data Admin')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Edit Data Admin</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('admin/data-admin') }}">Kembali</a>
@endsection

@section('main')

<div class="row">
	<div class="col-sm-12">				
		<div class="panel panel-default">
			<div class="panel-body">	
				<form action="{{ url('admin/data-admin', $admin->id) }}" method="post" enctype="multipart/form-data">				
					<div class="row">
						<div class="col-md-12">
							@include('errors/pesan_error')								
						</div>
						<div class="col-md-8">
							<div class='form-group @if($errors->has('nama')) has-error @endif'>
								<label class='control-label'>Nama</label>
								<input type='text' placeholder='Nama' class='form-control limited' id='nama' name='nama' maxlength='100' value='@if(count($errors) > 0){{old('nama')}}@else{{$admin->nama}}@endif'
								 required>

								@if ($errors->has('nama'))
									<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
								@endif
							</div>
							<div class='form-group @if($errors->has('email')) has-error @endif'>
								<label class='control-label'>Email</label>
								<input type='email' placeholder='Email' class='form-control limited' id='email' name='email' maxlength='45' value='@if(count($errors) > 0){{old('email')}}@else{{$admin->email}}@endif'
								required>

								@if ($errors->has('email'))
									<span for="email" class="help-block">{{ $errors->first('email') }}</span>
								@endif
							</div>
							<div class='form-group @if($errors->has('status')) has-error @endif'>
								<label class='control-label'>Status</label>
								<select name="status" id="status" class="form-control">
									<option value="1" @if($admin->status == 1) selected @endif>Aktif</option>
									<option value="2" @if($admin->status == 2) selected @endif>Tidak Aktif</option>
								</select>
							</div>
							<div class='form-group @if($errors->has('password')) has-error @endif'>
								<label class='control-label'>Password</label>
								<input type='password' placeholder='Password' class='form-control' id='password' name='password' value='@if(count($errors) > 0){{old('password')}}@else{{$admin->password}}@endif'
								required readonly>

								@if ($errors->has('password'))
									<span for="password" class="help-block">{{ $errors->first('password') }}</span>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Gambar</label>
								@if($admin->gambar)
									@if(file_exists("upload/admin/kecil/". $admin->gambar))
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
												<div class="hapus-gambar">
													<a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="{{ url('admin/data-admin/hapusgambar/'. $admin->id) }}" onclick="return hapusgambar()">
														<i class="icon-remove icon-white"></i>
													</a>
												</div>
												<img src="{{ url('/upload/admin/kecil/'. $admin->gambar) }}">
											</div>										
										</div>
									@else
										<div class='successHandler alert alert-danger display'>
											<i class='glyphicon glyphicon-remove'></i> Error. Gambar Kosong. Silahkan upload lagi.
										</div>
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
									@endif
								@else
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
								@endif
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="PUT">
							<input name="simpan" value="Simpan" type="submit" class="btn btn-green fright">
						</div>
					</div>							
				</form>
			</div>
		</div>				
	</div>		
</div>

@endsection

