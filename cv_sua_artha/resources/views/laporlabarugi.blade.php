<!DOCTYPE html>
<html>
<head>
	<title>Laporan Laba Rugi</title>
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
		<h5>Laporan Laba Rugi</h4>
		<h6>CV Sua Artha</h5>
	</center>
	
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
 
</body>
</html>