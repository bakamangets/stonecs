@extends('adminlte::page')

@section('title', 'Edit Data Transaksi')

@section('content_header')
    <h1>Edit Data Transaksi</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('edittransaksi.simpan', $transaksi->KodeTransaksi) }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Transaksi</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeTransaksi"  class="form-control" value="{{$transaksi->KodeTransaksi}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Tanggal</label>
					<div class="col-sm-10">
					<input class="date form-control" type="text" name="TglOrder" value="{{$transaksi->TglOrder}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Nama Pelanggan</label>
					<div class="col-sm-10">
					<select name='KodePelanggan' class="form-control" readonly>
							<option value="{{$transaksi->KodePelanggan}}">{{$transaksi->KodePelanggan}}</option>
							<!-- @foreach($user as $u)
    							<option value="{{$u->name}}">{{$u->id}} - {{$u->name}}</option>
  							@endforeach -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Produk</label>
					<div class="col-sm-10">
					<select name='KodeProduk' class="form-control" readonly>
							<option value="{{$transaksi->KodeProduk}}">{{$transaksi->KodeProduk}}</option>
							<!-- @foreach($produk as $p)
    							<option value="{{$p->NamaProduk}}">{{$p->NamaProduk}} - Rp.{{$p->Harga}},-</option>
  							@endforeach -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Jumlah</label>
					<div class="col-sm-10">
					<input   type="text" name="Jumlah"  class="form-control" value="{{$transaksi->Jumlah}}" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Total Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="TotalBayar"  class="form-control" value="{{$transaksi->TotalBayar}}" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Alamat Pengiriman</label>
					<div class="col-sm-10">
					<input   type="text" name="AlamatKirim"  class="form-control" value="{{$transaksi->AlamatKirim}}" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Status Transaksi</label>
					<div class="col-sm-10">
					<select name='StatusTransaksi' class="form-control" autofocus required>
							<option value="{{$transaksi->StatusTransaksi}}">{{$transaksi->StatusTransaksi}}</option>
							<option value="Dalam pengiriman">Dalam pengiriman</option>
    						<option value="Selesai">Selesai</option>
					</select>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('transaksi') }}">Kembali</a>
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
@else
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('edittransaksi.simpan', $transaksi->KodeTransaksi) }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Transaksi</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeTransaksi"  class="form-control" value="{{$transaksi->KodeTransaksi}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Tanggal</label>
					<div class="col-sm-10">
					<input class="date form-control" type="text" name="TglOrder" value="{{$transaksi->TglOrder}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Nama Pelanggan</label>
					<div class="col-sm-10">
					<select name='KodePelanggan' class="form-control" readonly>
							<option value="{{$transaksi->KodePelanggan}}">{{$transaksi->KodePelanggan}}</option>
							<!-- @foreach($user as $u)
    							<option value="{{$u->name}}">{{$u->id}} - {{$u->name}}</option>
  							@endforeach -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Produk</label>
					<div class="col-sm-10">
					<select name='KodeProduk' class="form-control" readonly>
							<option value="{{$transaksi->KodeProduk}}">{{$transaksi->KodeProduk}}</option>
							<!-- @foreach($produk as $p)
    							<option value="{{$p->NamaProduk}}">{{$p->NamaProduk}} - Rp.{{$p->Harga}},-</option>
  							@endforeach -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Jumlah</label>
					<div class="col-sm-10">
					<input   type="text" name="Jumlah"  class="form-control" value="{{$transaksi->Jumlah}}" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Total Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="TotalBayar"  class="form-control" value="{{$transaksi->TotalBayar}}" readonly>
					</div>

					<label     class="control-label     col-sm-2">Alamat Pengiriman</label>
					<div class="col-sm-10">
					<input   type="text" name="AlamatKirim"  class="form-control" value="{{$transaksi->AlamatKirim}}">
					</div>  

					<label     class="control-label     col-sm-2">Status Transaksi</label>
					<div class="col-sm-10">
					<select name='StatusTransaksi' class="form-control" readonly>
							<option value="{{$transaksi->StatusTransaksi}}">{{$transaksi->StatusTransaksi}}</option>
    						<option value="Barang diterima">Barang diterima</option>
					</select>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('transaksi') }}">Kembali</a>
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