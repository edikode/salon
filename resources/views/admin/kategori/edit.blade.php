@extends('admin/_layouts.template')

@section('title', 'Kategori Paket')

@section('bread')
<li><a href="{{ url('admin') }}"><i class="icon-laptop"></i> Home</a></li>
<li class="active">Kategori Paket</li>
@endsection

@section('button')
	<a class="btn btn-large btn-red item" href="{{ url('admin/kategori') }}">Kembali</a>
@endsection

@section('main')

<div class="row">
	<div class="col-sm-12">				
		<div class="panel panel-default">
			<div class="panel-body">	
				<form action="{{ url('admin/kategori', $kategori->id) }}" method="post" enctype="multipart/form-data">				
					<div class="row">
						<div class="col-md-12">
							@include('errors/pesan_error')								
						</div>
						<div class="col-md-8">
							<div class='form-group @if($errors->has('nama')) has-error @endif'>
								<label class='control-label'>Nama</label>
								<input type='text' placeholder='Nama' class='form-control limited' id='nama' name='nama' maxlength='100' value='@if(count($errors) > 0){{old('nama')}}@else{{$kategori->nama}}@endif'
								 required>

								@if ($errors->has('nama'))
									<span for="nama" class="help-block">{{ $errors->first('nama') }}</span>
								@endif

								<span class='help-block'><b>Link</b> {{ url('')}}/<input type='text' placeholder='Link' class='limited' id='link' name='link' maxlength='110' value='@if(count($errors) > 0){{old('link')}}@else{{$kategori->link}}@endif' required></span>

								@if ($errors->has('link'))
									<span for="link" class="help-block" style="color:red">{{ $errors->first('link') }}</span>
								@endif
							</div>
						</div>
						<div class="col-md-4">
							<div class='form-group @if($errors->has('parent')) has-error @endif'>
								<label class='control-label'>Parent</label>
								<select name="parent" id="parent" class="form-control" required>
									<option value="">-- Pilih --</option>
									<option @if ($kategori->parent == 0) selected @endif value="0">Kategori Utama</option>
									@foreach ($parent as $p)
										@if ($kategori->id != $p->id)
											<option @if ($p->id == $kategori->parent) selected @endif value="{{$p->id}}">{{$p->nama}}</option>
										@endif
									@endforeach
								</select>
								@if ($errors->has('parent'))
									<span for="parent" class="help-block">{{ $errors->first('parent') }}</span>
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

