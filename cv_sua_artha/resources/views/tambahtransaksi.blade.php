@extends('adminlte::page')

@section('title', 'Tambah Data Transaksi')

@section('content_header')
    <h1>Tambah Data Transaksi</h1>
@stop

@section('content')
@role('admin')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="{{ route('tambahtransaksi.simpan') }}" class="form-horizontal"  method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
					<div class="form-group">
					<label     class="control-label     col-sm-2">Tanggal</label>
					<div class="col-sm-10">
					<input class="date form-control" type="text" name="TglOrder" autofocus required>
					</div>
					<script type="text/javascript">
						$('.date').datepicker({  
							format: 'yyyy-mm-dd'
						});  
					</script>

					<label     class="control-label     col-sm-2">Pelanggan</label>
					<div class="col-sm-10">
					<select name='KodePelanggan' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<option value="Offline">Offline</option>
							@foreach($user as $u)
    							<option value="{{$u->name}}">{{$u->id}} - {{$u->name}}</option>
  							@endforeach
					</select>
					</div>

					<label     class="control-label     col-sm-2">Produk</label>
					<div class="col-sm-10">
					<select name='KodeProduk' class="form-control" autofocus required>
							<option value="">Pilih</option>
							@foreach($produk as $p)
    							<option value="{{$p->NamaProduk}}">{{$p->NamaProduk}} - Rp.{{$p->Harga}},-</option>
  							@endforeach
					</select>
					</div>

					<label     class="control-label     col-sm-2">Jumlah</label>
					<div class="col-sm-10">
					<input   type="text" name="Jumlah"  class="form-control" autofocus required>
					</div> 
					<!-- <div class="form-group">
					<label     class="control-label     col-sm-2">Total Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="TotalBayar"  class="form-control">
					</div>  -->

					<label     class="control-label     col-sm-2">Status Transaksi</label>
					<div class="col-sm-10">
					<select name='StatusTransaksi' class="form-control" autofocus required>
							<option value="">Pilih</option>
    						<option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
    						<option value="Lunas">Lunas</option>
					</select>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="{{ route('transaksi') }}">Batal</a>
                </div>
				<button   type="submit"   class="btn   btn-primary">Simpan</button>
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