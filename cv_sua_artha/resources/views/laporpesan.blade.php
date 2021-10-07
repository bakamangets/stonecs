<!DOCTYPE html>
<html>
<head>
	<title>Buku Pesanan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<img src="http://localhost/cv_sua_artha/public/logo.png" style="width:100px;" >
		<h5>Buku Pesanan</h4>
		<h6>CV Sua Artha</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>Kode Pesanan</th>
				<th>Tanggal</th>
				<th>Nama Pelangggan</th>
				<th>Jenis Furniture</th>
				<th>Alamat Pengiriman</th>
				<th>Harga DP</th>
				<th>Status Pesanan</th>
			</tr>
		</thead>
		<tbody>
			@php $total=0 @endphp
			@foreach($pesan as $p)
			<tr>
				<td>{{$p->KodePesan}}</td>
				<td>{{$p->TglPesan}}</td>
				<td>{{$p->KodePelanggan}}</td>
				<td>{{$p->JenisFurniture}}</td>
				<td>{{$p->AlamatKirim}}</td>
				<td>Rp.{{number_format($p->DP)}},-</td>
				<td>{{$p->StatusPesan}}</td>
			</tr>
			@php $total += $p->DP @endphp
			@endforeach
			<tr>
			<th colspan="5">Total :</th>
			<th>Rp.{{number_format ($total)}},-</th>
			<th></th>
			</tr>
		</tbody>
	</table>
 
</body>
</html>