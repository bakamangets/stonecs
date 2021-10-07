@extends('adminlte::page')

@section('title', 'Tambah Kategori Produk')

@section('content_header')
    <h1>Tambah Kategori Produk</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('tambahjenis.simpan') }}" class="form-horizontal"  method="post">
				{{ csrf_field() }}
				<div class="form-group">
					<label     class="control-label     col-sm-2">Nama Kategori</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaJenis"  class="form-control" autofocus required>
					</div>
					
					<label     class="control-label     col-sm-2">Custom Furniture</label>
					<div class="col-sm-10">
					<select name='Custom' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<option value="1">Yes</option>
							<option value="0">No</option>
					</select>
					</div>
					
					<label     class="control-label     col-sm-2">Harga per Meter</label>
					<div class="col-sm-10">
					<input   type="text" name="HargaPerMeter"  class="form-control" >
					</div>

					<label     class="control-label     col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<input   type="text" name="Deskripsi"  class="form-control" autofocus required>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('jenis') }}">Batal</a>
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