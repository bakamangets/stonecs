<?php $__env->startSection('title', 'Edit Data Transaksi'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Edit Data Transaksi</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="<?php echo e(route('edittransaksi.simpan', $transaksi->KodeTransaksi)); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Transaksi</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeTransaksi"  class="form-control" value="<?php echo e($transaksi->KodeTransaksi); ?>" readonly>
					</div>

					<label     class="control-label     col-sm-2">Tanggal</label>
					<div class="col-sm-10">
					<input class="date form-control" type="text" name="TglOrder" value="<?php echo e($transaksi->TglOrder); ?>" readonly>
					</div>

					<label     class="control-label     col-sm-2">Nama Pelanggan</label>
					<div class="col-sm-10">
					<select name='KodePelanggan' class="form-control" readonly>
							<option value="<?php echo e($transaksi->KodePelanggan); ?>"><?php echo e($transaksi->KodePelanggan); ?></option>
							<!-- <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($u->name); ?>"><?php echo e($u->id); ?> - <?php echo e($u->name); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Produk</label>
					<div class="col-sm-10">
					<select name='KodeProduk' class="form-control" readonly>
							<option value="<?php echo e($transaksi->KodeProduk); ?>"><?php echo e($transaksi->KodeProduk); ?></option>
							<!-- <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaProduk); ?>"><?php echo e($p->NamaProduk); ?> - Rp.<?php echo e($p->Harga); ?>,-</option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Jumlah</label>
					<div class="col-sm-10">
					<input   type="text" name="Jumlah"  class="form-control" value="<?php echo e($transaksi->Jumlah); ?>" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Total Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="TotalBayar"  class="form-control" value="<?php echo e($transaksi->TotalBayar); ?>" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Alamat Pengiriman</label>
					<div class="col-sm-10">
					<input   type="text" name="AlamatKirim"  class="form-control" value="<?php echo e($transaksi->AlamatKirim); ?>" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Status Transaksi</label>
					<div class="col-sm-10">
					<select name='StatusTransaksi' class="form-control" autofocus required>
							<option value="<?php echo e($transaksi->StatusTransaksi); ?>"><?php echo e($transaksi->StatusTransaksi); ?></option>
							<option value="Dalam pengiriman">Dalam pengiriman</option>
    						<option value="Selesai">Selesai</option>
					</select>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="<?php echo e(route('transaksi')); ?>">Kembali</a>
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
<?php else: ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="<?php echo e(route('edittransaksi.simpan', $transaksi->KodeTransaksi)); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Transaksi</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeTransaksi"  class="form-control" value="<?php echo e($transaksi->KodeTransaksi); ?>" readonly>
					</div>

					<label     class="control-label     col-sm-2">Tanggal</label>
					<div class="col-sm-10">
					<input class="date form-control" type="text" name="TglOrder" value="<?php echo e($transaksi->TglOrder); ?>" readonly>
					</div>

					<label     class="control-label     col-sm-2">Nama Pelanggan</label>
					<div class="col-sm-10">
					<select name='KodePelanggan' class="form-control" readonly>
							<option value="<?php echo e($transaksi->KodePelanggan); ?>"><?php echo e($transaksi->KodePelanggan); ?></option>
							<!-- <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($u->name); ?>"><?php echo e($u->id); ?> - <?php echo e($u->name); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Produk</label>
					<div class="col-sm-10">
					<select name='KodeProduk' class="form-control" readonly>
							<option value="<?php echo e($transaksi->KodeProduk); ?>"><?php echo e($transaksi->KodeProduk); ?></option>
							<!-- <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaProduk); ?>"><?php echo e($p->NamaProduk); ?> - Rp.<?php echo e($p->Harga); ?>,-</option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
					</select>
					</div>

					<label     class="control-label     col-sm-2">Jumlah</label>
					<div class="col-sm-10">
					<input   type="text" name="Jumlah"  class="form-control" value="<?php echo e($transaksi->Jumlah); ?>" readonly>
					</div> 

					<label     class="control-label     col-sm-2">Total Harga</label>
					<div class="col-sm-10">
					<input   type="text" name="TotalBayar"  class="form-control" value="<?php echo e($transaksi->TotalBayar); ?>" readonly>
					</div>

					<label     class="control-label     col-sm-2">Alamat Pengiriman</label>
					<div class="col-sm-10">
					<input   type="text" name="AlamatKirim"  class="form-control" value="<?php echo e($transaksi->AlamatKirim); ?>">
					</div>  

					<label     class="control-label     col-sm-2">Status Transaksi</label>
					<div class="col-sm-10">
					<select name='StatusTransaksi' class="form-control" readonly>
							<option value="<?php echo e($transaksi->StatusTransaksi); ?>"><?php echo e($transaksi->StatusTransaksi); ?></option>
    						<option value="Barang diterima">Barang diterima</option>
					</select>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="<?php echo e(route('transaksi')); ?>">Kembali</a>
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
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/edittransaksi.blade.php ENDPATH**/ ?>