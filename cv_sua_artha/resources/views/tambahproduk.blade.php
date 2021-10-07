@extends('adminlte::page')

@section('title', 'Tambah Data Produk')

@section('content_header')
    <h1>Tambah Data Produk</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('tambahproduk.simpan') }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kategori Produk</label>
					<div class="col-sm-10">
					<select name='KodeJenis' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($jenis as $p)
    							<option value="{{$p->NamaJenis}}">{{$p->KodeJenis}} - {{$p->NamaJenis}}</option>
  							@endforeach
					</select>
					</div>

					<label     class="control-label     col-sm-2">Nama Produk</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaProduk"  class="form-control" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="Harga"  class="form-control" autofocus required>
					</div>
					
					<label     class="control-label     col-sm-2">Harga Pokok</label>
					<div class="col-sm-10">
					<input   type="text" name="HargaPokok"  class="form-control" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Stok</label>
					<div class="col-sm-10">
					<input   type="text" name="Stok"  class="form-control" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Gambar</label>
					<div class="col-sm-10">
						<input type="file" name="file" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<input   type="text" name="Deskripsi"  class="form-control" autofocus required>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('produk') }}">Batal</a>
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