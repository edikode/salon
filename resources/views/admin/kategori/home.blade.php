@extends('admin/_layouts.template')

@section('title', 'Kategori Paket')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Kategori Paket</li>
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

							@foreach($kategori as $k)
							
							<tr>
								<td class='center'>{{$i++}}</td>
								<td>{{$k->nama}}</td>
								<td>

									<a data-original-title='Edit' class='btn btn-blue tooltips' href='{{ url('admin/kategori/'. $k->id .'/edit')}}'>
										<i class='clip-pencil'></i>
									</a>
									
									<form action="{{url('admin/kategori', $k->id)}}" method="post" style="display: inline-block;">
										{{ csrf_field() }}	
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" data-original-title='Hapus' class="btn btn-red tooltips" onclick='return konfirmasi()'><i class="clip-remove"></i></button>
									</form>
								</td>											
							</tr>
							@php
								$parent = ParentKategori($k->id);
							@endphp
								@foreach ($parent as $p)
									<tr>
										<td class='center'>{{$i++}}</td>
										<td>--- {{$p->nama}}</td>
										<td>

											<a data-original-title='Edit' class='btn btn-blue tooltips' href='{{ url('admin/kategori/'. $p->id .'/edit')}}'>
												<i class='clip-pencil'></i>
											</a>
											
											<form action="{{url('admin/kategori', $p->id)}}" method="post" style="display: inline-block;">
												{{ csrf_field() }}	
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" data-original-title='Hapus' class="btn btn-red tooltips" onclick='return konfirmasi()'><i class="clip-remove"></i></button>
											</form>
										</td>											
									</tr>
								@endforeach
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
				<form action="{{url('admin/kategori')}}" method="post" enctype="multipart/form-data">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title">Tambah kategori</h4>
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
								<div class='form-group @if($errors->has('parent')) has-error @endif'>
									<label class='control-label'>Parent</label>
									<select name="parent" id="parent" class="form-control" required>
										<option value="">-- Pilih --</option>
										<option value="0">Kategori Utama</option>
										@foreach ($kategori as $k)
											<option value="{{$k->id}}">{{$k->nama}}</option>
										@endforeach
									</select>
									@if ($errors->has('parent'))
										<span for="parent" class="help-block">{{ $errors->first('parent') }}</span>
									@endif
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
