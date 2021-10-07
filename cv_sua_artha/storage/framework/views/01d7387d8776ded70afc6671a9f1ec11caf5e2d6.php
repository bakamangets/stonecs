<?php $__env->startSection('title', 'Tambah Data Produk'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Tambah Data Produk</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="<?php echo e(route('tambahproduk.simpan')); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

					<div class="form-group">
					<label     class="control-label     col-sm-2">Kategori Produk</label>
					<div class="col-sm-10">
					<select name='KodeJenis' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaJenis); ?>"><?php echo e($p->KodeJenis); ?> - <?php echo e($p->NamaJenis); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                  <a href="<?php echo e(route('produk')); ?>">Batal</a>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/tambahproduk.blade.php ENDPATH**/ ?>