@extends('pelapak/_layouts.template')

@section('title', 'Profil Pelapak')

@section('bread')
<li><a href="{{ url('pelapak') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Profil Pelapak</li>
@endsection

@section('main')

<div class="row">
	<div class="col-sm-12">				
		<div class="panel panel-default">
			<div class="panel-body">	
				<form action="{{ url('pelapak/profil-pelapak', $profil->id) }}" method="post" enctype="multipart/form-data">				
					<div class="row">
						<div class="col-md-12">
							@include('errors/pesan_error')								
						</div>
						<div class="col-md-8">
							<div class='form-group @if($errors->has('nama')) has-error @endif'>
								<label class='control-label'>Nama</label>
								<input type='text' placeholder='Nama' class='form-control limited' id='nama' name='nama' maxlength='100' value='@if(count($errors) > 0){{old('nama')}}@else{{$profil->nama}}@endif'
								 required>

								@if ($errors->has('nama'))
									<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
								@endif
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class='form-group @if($errors->has('email')) has-error @endif'>
										<label class='control-label'>Email</label>
										<input type='email' placeholder='Email' class='form-control' id='email' name='email' value='@if(count($errors) > 0){{old('email')}}@else{{$profil->email}}@endif' required readonly>

										@if ($errors->has('email'))
											<span for="email" class="help-block">{{ $errors->first('email') }}</span>
										@endif
									</div>
								</div>
								<div class="col-sm-6">
									<div class='form-group @if($errors->has('telepon')) has-error @endif'>
										<label class='control-label'>Telepon</label>
										<input type='text' placeholder='Nama' class='form-control limited' id='telepon' name='telepon' maxlength='100' value='@if(count($errors) > 0){{old('telepon')}}@else{{$profil->telepon}}@endif'
										required>

										@if ($errors->has('telepon'))
											<span for="telepon" class="help-block">{{ $errors->first('telepon') }}</span>
										@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class='form-group @if($errors->has('tempat_lahir')) has-error @endif'>
										<label class='control-label'>Tempat Lahir</label>
										<input type='text' placeholder='Tempat Lahir' class='form-control limited' id='tempat_lahir' name='tempat_lahir' maxlength='100' value='@if(count($errors) > 0){{old('tempat_lahir')}}@else{{$profil->tempat_lahir}}@endif'
										required>

										@if ($errors->has('tempat_lahir'))
											<span for="tempat_lahir" class="help-block">{{ $errors->first('tempat_lahir') }}</span>
										@endif
									</div>
								</div>
								<div class="col-sm-6">
									<div class='form-group @if($errors->has('tanggal_lahir')) has-error @endif'>
										<label class='control-label'>Tanggal Lahir</label>
										<input type='date' placeholder='Tanggal Lahir' class='form-control' id='tanggal_lahir' name='tanggal_lahir' value='@if(count($errors) > 0){{old('tanggal_lahir')}}@else{{$profil->tanggal_lahir}}@endif'
										required>

										@if ($errors->has('tanggal_lahir'))
											<span for="tanggal_lahir" class="help-block">{{ $errors->first('tanggal_lahir') }}</span>
										@endif
									</div>
								</div>
							</div>
							<div class='form-group'>
								<label class='control-label'>Alamat</label>
								<textarea class='form-control limited' id='alamat' cols='10' rows='4' name='alamat' style='height:75px; resize:none;' maxlength='160'>@if(count($errors) > 0){{old('alamat')}}@else{{$profil->alamat}}@endif</textarea>
							</div>
							<div class='form-group'>
								<label class='control-label'>Status</label>
								<select name="status" id="status" class="form-control">
									<option value="1" @if($profil->status == 1)selected @endif>Aktif</option>
									<option value="2" @if($profil->status == 2)selected @endif>Non Aktif</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Foto Profil</label>
								@if($profil->gambar)
									@if(file_exists("upload/pelapak/kecil/". $profil->gambar))
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
												<div class="hapus-gambar">
													<a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="{{ url('pelapak/profil-pelapak/hapusgambar/'. $profil->id) }}" onclick="return hapusgambar()">
														<i class="icon-remove icon-white"></i>
													</a>
												</div>
												<img src="{{ url('/upload/pelapak/kecil/'. $profil->gambar) }}">
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

