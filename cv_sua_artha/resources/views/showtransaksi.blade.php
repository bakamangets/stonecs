@extends('adminlte::page')

@section('title', 'Detail Transaksi')

@section('content_header')
    <h1>Detail Transaksi</h1>
@stop

@section('content')
@role('owner')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body"><form  class="form-horizontal"  method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
          <label     class="control-label     col-sm-2">Kode Transaksi</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodeTransaksi }}</p>
          </div>

          <label     class="control-label     col-sm-2">Tanggal</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->TglOrder }}</p>
          </div>

          <label     class="control-label     col-sm-2">Nama Pelanggan</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodePelanggan }}</p>
          </div>

          <label     class="control-label     col-sm-2">Produk</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodeProduk }}</p>
          </div>

          <label     class="control-label     col-sm-2">Jumlah</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->Jumlah }}</p>
          </div>

          <label     class="control-label     col-sm-2">Total Harga</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->TotalBayar }}</p>
          </div>

          <label     class="control-label     col-sm-2">Status Transaksi</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->StatusTransaksi }}</p>
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="{{   route('transaksi')   }}"  type="button"   class="btn   btn-primary">Kembali</a>
        </div>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@elserole('admin')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body"><form  class="form-horizontal"  method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
          <label     class="control-label     col-sm-2">Kode Transaksi</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodeTransaksi }}</p>
          </div>

          <label     class="control-label     col-sm-2">Tanggal</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->TglOrder }}</p>
          </div>

          <label     class="control-label     col-sm-2">Nama Pelanggan</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodePelanggan }}</p>
          </div>
		  
		  <label     class="control-label     col-sm-2">Telp Pelanggan</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->TelpPelanggan }}</p>
          </div>

          <label     class="control-label     col-sm-2">Produk</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodeProduk }}</p>
          </div>

          <label     class="control-label     col-sm-2">Jumlah</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->Jumlah }}</p>
          </div>

          <label     class="control-label     col-sm-2">Total Harga</label>
          <div class="col-sm-10">
          <p>Rp.{{ number_format($transaksi->TotalBayar) }},-</p>
          </div>

          <label     class="control-label     col-sm-2">Alamat Pengiriman</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->AlamatKirim }}</p>
          </div>

          <label     class="control-label     col-sm-2">Status Transaksi</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->StatusTransaksi }}</p>
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="{{   route('transaksi')   }}"  type="button"   class="btn   btn-success">Kembali</a>
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
        <div class="panel-body"><form  class="form-horizontal"  method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
          <label     class="control-label     col-sm-2">Kode Transaksi</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodeTransaksi }}</p>
          </div>

          <label     class="control-label     col-sm-2">Tanggal</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->TglOrder }}</p>
          </div>

          <label     class="control-label     col-sm-2">Produk</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->KodeProduk }}</p>
          </div>

          <label     class="control-label     col-sm-2">Jumlah</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->Jumlah }}</p>
          </div>

          <label     class="control-label     col-sm-2">Total Harga</label>
          <div class="col-sm-10">
          <p>Rp.{{ number_format($transaksi->TotalBayar) }},-</p>
          </div>

          <label     class="control-label     col-sm-2">Alamat Pengiriman</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->AlamatKirim }}</p>
          </div>

          <label     class="control-label     col-sm-2">Status Transaksi</label>
          <div class="col-sm-10">
          <p>{{ $transaksi->StatusTransaksi }}</p>
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="{{   route('transaksi')   }}"  type="button"   class="btn   btn-default">Kembali</a>
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