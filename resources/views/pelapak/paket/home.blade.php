@extends('pelapak/_layouts.template')

@section('title', 'Data Paket')


@section('bread')
<li><a href="{{ url('pelapak') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Data Paket</li>
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
					<div class="row">
						<form action="{{ url('pelapak/paket/cari') }}" method="get" enctype="multipart/form-data">
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
								<th>Deskripsi</th>
								<th class="pilihan">Pilihan</th>								
							</tr>
						</thead>
						<tbody>

							<?php 
								$tampil_data = 1;  
								$i = ($paket->currentpage()-1)* $paket->perpage() + 1;
							?>

							@foreach($paket as $p)
								<tr>
									<td class='center'>{{$i++}}</td>
									<td>{{$p->nama}}</td>
									<td>{{$p->deskripsi}}</td>
									<td>
										<a data-original-title='Detail' class='btn btn-green tooltips' href='{{ url('pelapak/paket/'. $p->id)}}'>
											<i class='clip-eye'></i>
										</a>

										<a data-original-title='Edit' class='btn btn-blue tooltips' href='{{ url('pelapak/paket/'. $p->id .'/edit')}}'>
											<i class='clip-pencil'></i>
										</a>
										
										<form action="{{url('pelapak/paket', $p->id)}}" method="post" style="display: inline-block;">
											{{ csrf_field() }}	
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" data-original-title='Hapus' class="btn btn-red tooltips" onclick='return konfirmasi()'><i class="clip-remove"></i></button>
										</form>
									</td>											
								</tr>
								<?php $tampil_data++;	?>

							@endforeach

							@if(count($paket) < 1)
								<tr>
									<td colspan="6" align="center"><strong>--- Data tidak ada ---</strong></td>
								</tr>
							@endif

						</tbody>
					</table>
					<hr>
					<div class="row">
						<div class="col-sm-6">
							<h5>Tampil : {{$tampil_data-1}} dari {{count($paket)}} data.</h5>
						</div>
						<div class="col-sm-6" >
							<div style="float: right;">
								{{ $paket->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-crud">
			<div class="modal-content">
				<form action="{{url('pelapak/paket')}}" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Tambah Paket</h4>
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
								<div class='form-group @if($errors->has('harga')) has-error @endif'>
									<label class='control-label'>Harga</label>
									<input type='text' placeholder='Harga' class='form-control' id='harga' name='harga' value='@if(count($errors) > 0){{old('harga')}}@endif'
									required>

									@if ($errors->has('harga'))
										<span for="harga" class="help-block">{{ $errors->first('harga') }}</span>
									@endif
								</div>
								<div class='form-group'>
									<label class='control-label'>Teks</label>
									<textarea class='ckeditor' id='ckeditor' name='teks'>@if(count($errors) > 0){{old('teks')}}@endif</textarea>
								</div>
								<div class="form-group">
									<label>Gambar</label>
									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="fileupload-new thumbnail" style="max-width:334px; max-height:253px;"><img src="{{ asset('admins/images/400x300.jpg') }}" alt=""/>
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
