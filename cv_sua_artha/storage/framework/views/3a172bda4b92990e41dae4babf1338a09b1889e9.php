<?php $__env->startSection('title', 'Edit Data Pesanan'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
    <h2>Custom Furniture</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <form action="<?php echo e(route('editpesan.simpan',$pesan->KodePesan)); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label     class="control-label     col-sm-2">Kode Pesanan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="KodePesan" value="<?php echo e($pesan->KodePesan); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Tanggal Dipesan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="TglPesan" value="<?php echo e($pesan->TglPesan); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Nama Pemesan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="KodePelanggan" value="<?php echo e($pesan->KodePelanggan); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Jenis Furniture</label>
                    <div class="col-sm-10">
                    <input   type="text" name="KodeJenis" value="<?php echo e($pesan->JenisFurniture); ?>" class="form-control" readonly>
                    </div>
					
					<label     class="control-label     col-sm-2">Bahan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Bahan" value="<?php echo e($pesan->Bahan); ?>" class="form-control" readonly>
                    </div>
					
					<label     class="control-label     col-sm-2">Motif</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Motif" value="<?php echo e($pesan->Motif); ?>" class="form-control" readonly>
                    </div>
					
					<label     class="control-label     col-sm-2">Ukuran</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Ukuran" value="<?php echo e($pesan->Ukuran); ?>" class="form-control" readonly>
                    </div>
					
					<label     class="control-label     col-sm-2">Model</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Model" value="<?php echo e($pesan->Model); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Gambar Referensi</label>
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none"></h3>
                        <div class="col-12">
                            <img src="<?php echo e(asset('gambar_pesan/' .$pesan->Gambar)); ?>" class="product-image" alt="Product Image">
                        </div>             
                    </div>
                    <div class="col-sm-10">
                        <input type="file" name="file" autofocus required>
                    </div>

                    <label     class="control-label     col-sm-2">Komentar Tambahan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Komentar" value="<?php echo e($pesan->Komentar); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">DP</label>
                    <div class="col-sm-10">
                    <input   type="text" name="DP"  value="<?php echo e($pesan->DP); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Alamat Pengiriman</label>
                    <div class="col-sm-10">
                    <input   type="text" name="AlamatKirim"  value="<?php echo e($pesan->AlamatKirim); ?>" class="form-control" readonly>
                    </div>

                    <label     class="control-label     col-sm-2">Status Pesanan</label>
                    <div class="col-sm-10">
                    <select name='StatusPesan' class="form-control" autofocus required>
                            <option value="<?php echo e($pesan->StatusPesan); ?>"><?php echo e($pesan->StatusPesan); ?></option>
                            <option value="Sedang Diproses">Sedang Diproses</option>
                            <option value="Selesai">Selesai</option>
                    </select>
                    </div>

                </div>

                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="btn btn-default">
                  <a href="<?php echo e(route('pesan')); ?>">Kembali</a>
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
    <h2>Oops!</h2>
    <h3>Mau Kemana? Silahkan navigasi melalui sidebar :)</h3>
    <?php endif; ?>
                         
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/editpesan.blade.php ENDPATH**/ ?>