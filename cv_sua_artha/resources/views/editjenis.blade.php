@extends('adminlte::page')

@section('title', 'Edit Kategori Produk')

@section('content_header')
    <h1>Edit Kategori Produk</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('editjenis.simpan', $jenis->KodeJenis) }}" class="form-horizontal"  method="post">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Kategori</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeJenis"   class="form-control" value="{{ $jenis->KodeJenis }}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Nama Kategori</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaJenis"   class="form-control" value="{{ $jenis->NamaJenis }}" autofocus required>
					</div>
					
					<label     class="control-label     col-sm-2">Custom Furniture</label>
					<div class="col-sm-10">
					<select name='Custom' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<option value="1" <?php if($jenis->Custom == 1){ echo 'selected';} ?> >Yes</option>
							<option value="0" <?php if($jenis->Custom == 0){ echo 'selected';} ?> >No</option>
					</select>
					</div>
					
					<label     class="control-label     col-sm-2">Harga per Meter</label>
					<div class="col-sm-10">
					<input  type="text" name="HargaPerMeter"  value="{{ $jenis->HargaPerMeter }}" class="form-control" >
					</div>

					<label     class="control-label     col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<input   type="text" name="Deskripsi"   class="form-control" value="{{ $jenis->Deskripsi }}" autofocus required>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('jenis') }}">Kembali</a>
                </div>
				<button   type="submit"   class="btn   btn-success">Simpan</button>
				</div>
				</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endrole
@endsection