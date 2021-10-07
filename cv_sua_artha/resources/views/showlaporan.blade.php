@extends('adminlte::page')

@section('title', 'Laporan Laba Rugi')

@section('content_header')
    <h1>Laporan Laba Rugi</h1>
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
<?php
	$ar_hp = array();
	$tot_hp = $tot_by = 0;
	foreach ($produk as $i => $p){
		$ar_hp[$p->NamaProduk] = $p->HargaPokok;
	}
	
	foreach ($transaksi as $i => $p){
		$tot_hp += $ar_hp[$p->KodeProduk];
		$tot_by += $p->TotalBayar;
	}
	
	$tot_laba = $tot_by - $tot_hp;
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
		<form action="{{route('laporan.cetak')}}" method="GET">
        <div class="row" style="margin-bottom:10px;" >
            <div class="col-md-2">
                <!-- <input type="date" name="awal" class="form-control datepicker" value="{{$awal ?? null}}" placeholder="Tanggal Mulai" required> -->
                <input class="date form-control" type="text" id="awal" name="awal" placeholder="Tanggal Awal" value="{{$awal}}" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
            <div class="col-md-2">
                <!-- <input type="date" name="akhir" class="form-control datepicker" value="{{$akhir ?? null}}" placeholder="Tanggal Akhir" required> -->
                <input class="date form-control" type="text" id="akhir" name="akhir" placeholder="Tanggal Akhir" value="{{$akhir}}" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
			<div class="col-md-2">
                <button type="button" id="search" class="btn btn-warning">Search</button>
            </div>
            <div class="col-md-2" style="margin-left:-100px;" >
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i>Cetak</button>
            </div>
        </div>
        </form>
			<table class="table">          
				<tbody>
					<tr>
						<td style="font-weight:bold;" >Pendapatan</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pendapatan Penjualan</td>
						<td><?php echo 'Rp.'.number_format($tot_by).',-'; ?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;" >Total Pendapatan</td>
						<td><?php echo 'Rp.'.number_format($tot_by).',-'; ?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;" >Harga Pokok Penjualan</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Harga Pokok Penjualan</td>
						<td><?php echo 'Rp.'.number_format($tot_hp).',-'; ?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;" >Total Harga Pokok Penjualan</td>
						<td><?php echo 'Rp.'.number_format($tot_hp).',-'; ?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;" >Total Laba Kotor</td>
						<td><?php echo 'Rp.'.number_format($tot_laba).',-'; ?></td>
					</tr>
					<!--<tr>
						<td style="font-weight:bold;" >Beban Operasional</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Biaya-biaya</td>
						<td><?php echo 'Rp.'.number_format(0).',-'; ?></td>
					</tr>
					<tr>
						<td style="font-weight:bold;" >Total Beban Operasional</td>
						<td><?php echo 'Rp.'.number_format(0).',-'; ?></td>
					</tr>-->
					<tr>
						<td style="font-weight:bold;" >Laba / Rugi Bersih</td>
						<td><?php echo 'Rp.'.number_format($tot_laba).',-'; ?></td>
					</tr>
				</tbody>
			</table>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
	<script>
		$('body').on('click','#search',function(){
			var akhir = $('#akhir').val();
			var awal = $('#awal').val();
			if(awal != '' && akhir != ''){
				window.location.href = "http://localhost/cv_sua_artha/public/laporan/search/"+awal+" "+akhir;
			}
		});
	</script>
@stop