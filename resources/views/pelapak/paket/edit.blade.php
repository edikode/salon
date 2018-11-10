@extends('pelapak/_layouts.template')

@section('title', 'Edit Paket')

@section('bread')
<li><a href="{{ url('pelapak') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Edit Paket</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('pelapak/paket') }}">Kembali</a>
@endsection

@section('main')



<div class="row">
	<div class="col-sm-12">				
		<div class="panel panel-default">
			<div class="panel-body">	
				<form action="{{ url('pelapak/paket', $paket->id) }}" method="post" enctype="multipart/form-data">				
					<div class="row">
						<div class="col-md-12">
							@include('errors/pesan_error')								
						</div>
						<div class="col-md-8">
							<div class='form-group @if($errors->has('nama')) has-error @endif'>
								<label class='control-label' for="nama">Nama</label>
								<input type='text' placeholder='Nama' class='form-control limited' id='nama' name='nama' maxlength='100' value='@if(count($errors) > 0){{old('nama')}}@else{{$paket->nama}}@endif'
								 required>

								@if ($errors->has('nama'))
									<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
								@endif

								<span class='help-block'><b>Link</b> {{ url('')}}/<input type='text' placeholder='Link' class='limited' id='link' name='link' maxlength='110' value='@if(count($errors) > 0){{old('link')}}@else{{$paket->link}}@endif' required></span>

								@if ($errors->has('link'))
									<span for="link" class="help-block" style="color:red">{{ $errors->first('link') }}</span>
								@endif
							</div>
							<div class='form-group'>
								<label class='control-label' for="deskripsi">Deskripsi</label>
								<textarea class='form-control limited' id='deskripsi' cols='10' rows='4' name='deskripsi' style='height:75px; resize:none;' maxlength='160'>@if(count($errors) > 0){{old('deskripsi')}}@else{{$paket->deskripsi}}@endif</textarea>
							</div>
							<div class='form-group'>
								<label class='control-label' for="teks">Teks</label>
								<textarea class='ckeditor' id='ckeditor' name='teks'>@if(count($errors) > 0){{old('teks')}}@else{{$paket->teks}}@endif</textarea>
							</div>
						</div>
						<div class="col-md-4">
							<div class='form-group'>
								<label class='control-label' for="tampil">Status</label>
								<select name="tampil" id="tampil" class="form-control">
									<option value="1" @if($paket->tampil == 1)selected @endif>Ditampilkan</option>
									<option value="2" @if($paket->tampil == 2)selected @endif>Tidak Ditampilkan</option>
								</select>
							</div>
							<div class='form-group @if($errors->has('harga')) has-error @endif'>
								<label class='control-label' for="harga">Harga</label>
								<input type='text' placeholder='Harga' class='form-control' id='harga' name='harga' value='@if(count($errors) > 0){{old('harga')}}@else{{$paket->harga}}@endif'
								 required>

								@if ($errors->has('harga'))
									<span for="harga" class="help-block">{{ $errors->first('harga') }}</span>
								@endif

							</div>
							<div class="form-group">
								<label>Gambar</label>
								@if($paket->gambar)
									@if(file_exists("upload/paket/kecil/". $paket->gambar))
										<div class="fileupload fileupload-new" data-provides="fileupload">
											<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px; position:relative;">
												<div class="hapus-gambar">
													<a data-original-title="Hapus" data-placement="left" class="btn btn-bricky tooltips" href="{{ url('pelapak/paket/hapusgambar/'. $paket->id) }}" onclick="return hapusgambar()">
														<i class="icon-remove icon-white"></i>
													</a>
												</div>
												<img src="{{ url('/upload/paket/kecil/'. $paket->gambar) }}">
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

