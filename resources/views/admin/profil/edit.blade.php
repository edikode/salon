@extends('admin/_layouts.template')

@section('title', 'Profil Aplikasi')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Profil Aplikasi</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('admin/profil') }}">Kembali</a>
@endsection

@section('main')

<div class="row">
	<div class="col-sm-12">				
		<div class="panel panel-default">
			<div class="panel-body">	
				<form action="{{ url('admin/profil', $profil->id) }}" method="post" enctype="multipart/form-data">				
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

								<span class='help-block'><b>Link</b> {{ url('')}}/<input type='text' placeholder='Link' class='limited' id='link' name='link' maxlength='110' value='@if(count($errors) > 0){{old('link')}}@else{{$profil->link}}@endif' required></span>

								@if ($errors->has('link'))
									<span for="link" class="help-block" style="color:red">{{ $errors->first('link') }}</span>
								@endif
							</div>
							<div class='form-group'>
								<label class='control-label'>Deskripsi</label>
								<textarea class='form-control limited' id='deskripsi' cols='10' rows='4' name='deskripsi' style='height:75px; resize:none;' maxlength='160'>@if(count($errors) > 0){{old('deskripsi')}}@else{{$profil->deskripsi}}@endif</textarea>
							</div>
							<div class='form-group'>
								<label class='control-label'>Teks</label>
								<textarea class='ckeditor' id='ckeditor' name='teks'>@if(count($errors) > 0){{old('teks')}}@else{{$profil->teks}}@endif</textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Gambar</label>
								@if($profil->gambar)
									@if(file_exists("upload/profil/kecil/". $profil->gambar))
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
												<div class="hapus-gambar">
													<a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="{{ url('admin/profil/hapusgambar/'. $profil->id) }}" onclick="return hapusgambar()">
														<i class="icon-remove icon-white"></i>
													</a>
												</div>
												<img src="{{ url('/upload/profil/kecil/'. $profil->gambar) }}">
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

