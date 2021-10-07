<?php $__env->startSection('title', 'Edit Kategori Produk'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Edit Kategori Produk</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<form action="<?php echo e(route('editjenis.simpan', $jenis->KodeJenis)); ?>" class="form-horizontal"  method="post">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="POST">
					<div class="form-group">
					<label     class="control-label     col-sm-2">Kode Kategori</label>
					<div class="col-sm-10">
					<input   type="text" name="KodeJenis"   class="form-control" value="<?php echo e($jenis->KodeJenis); ?>" readonly>
					</div>

					<label     class="control-label     col-sm-2">Nama Kategori</label>
					<div class="col-sm-10">
					<input   type="text" name="NamaJenis"   class="form-control" value="<?php echo e($jenis->NamaJenis); ?>" autofocus required>
					</div>
					
					<label     class="control-label     col-sm-2">Custom Furniture</label>
					<div class="col-sm-10">
					<select name='Custom' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<option value="1" <?php if($jenis->Custom == 1){ echo 'selected';} ?> >Yes</option>
							<option value="0" <?php if($jenis->Custom == 0){ echo 'selected';} ?> >No</option>
					</select>
					</div>
					
					<label     class="control-label     col-sm-2">Harga per Meter</label>
					<div class="col-sm-10">
					<input  type="text" name="HargaPerMeter"  value="<?php echo e($jenis->HargaPerMeter); ?>" class="form-control" >
					</div>

					<label     class="control-label     col-sm-2">Deskripsi</label>
					<div class="col-sm-10">
					<input   type="text" name="Deskripsi"   class="form-control" value="<?php echo e($jenis->Deskripsi); ?>" autofocus required>
					</div>
				</div>

				<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<div class="btn btn-default">
                  <a href="<?php echo e(route('jenis')); ?>">Kembali</a>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/editjenis.blade.php ENDPATH**/ ?>