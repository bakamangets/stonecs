@extends('adminlte::page')

@section('title', 'Edit Data Produk')

@section('content_header')
    <h1>Edit Data Produk</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('editproduk.simpan', $produk->KodeProduk) }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Produk</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeProduk"  class="form-control" value="{{$produk->KodeProduk}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Jenis</label>
					<div class="col-sm-10">
					<select name='KodeJenis' class="form-control" autofocus required>
							<option value="{{$produk->KodeJenis}}">{{$produk->KodeJenis}}</option>
							@foreach($jenis as $p)
    							<option value="{{$p->NamaJenis}}">{{$p->KodeJenis}}. {{$p->NamaJenis}}</option>
  							@endforeach
					</select>
					</div>

					<label     class="control-label     col-sm-2">Nama Produk</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaProduk"  class="form-control" value="{{$produk->NamaProduk}}" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="Harga"  class="form-control" value="{{$produk->Harga}}" autofocus required>
					</div>
					
					<label     class="control-label     col-sm-2">Harga Pokok</label>
					<div class="col-sm-10">
					<input   type="text" name="HargaPokok"  class="form-control" value="{{$produk->HargaPokok}}" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Stok</label>
					<div class="col-sm-10">
					<input   type="text" name="Stok"  class="form-control" value="{{$produk->Stok}}" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Gambar</label>
					<div class="col-sm-10">
						<input type="file" name="file" autofocus required>
					</div>

					<label     class="control-label     col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<input   type="text" name="Deskripsi"  class="form-control" value="{{$produk->Deskripsi}}" autofocus required>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('produk') }}">Kembali</a>
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