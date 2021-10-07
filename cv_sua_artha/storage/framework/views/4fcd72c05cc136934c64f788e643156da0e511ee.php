<?php $__env->startSection('title', 'Detail Transaksi'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Detail Transaksi</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body"><form  class="form-horizontal"  method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
          <label     class="control-label     col-sm-2">Kode Transaksi</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodeTransaksi); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Tanggal</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->TglOrder); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Nama Pelanggan</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodePelanggan); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Produk</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodeProduk); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Jumlah</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->Jumlah); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Total Harga</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->TotalBayar); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Status Transaksi</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->StatusTransaksi); ?></p>
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo e(route('transaksi')); ?>"  type="button"   class="btn   btn-primary">Kembali</a>
        </div>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php elseif(auth()->check() && auth()->user()->hasRole('admin')): ?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body"><form  class="form-horizontal"  method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
          <label     class="control-label     col-sm-2">Kode Transaksi</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodeTransaksi); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Tanggal</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->TglOrder); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Nama Pelanggan</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodePelanggan); ?></p>
          </div>
		  
		  <label     class="control-label     col-sm-2">Telp Pelanggan</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->TelpPelanggan); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Produk</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodeProduk); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Jumlah</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->Jumlah); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Total Harga</label>
          <div class="col-sm-10">
          <p>Rp.<?php echo e(number_format($transaksi->TotalBayar)); ?>,-</p>
          </div>

          <label     class="control-label     col-sm-2">Alamat Pengiriman</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->AlamatKirim); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Status Transaksi</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->StatusTransaksi); ?></p>
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo e(route('transaksi')); ?>"  type="button"   class="btn   btn-success">Kembali</a>
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
        <div class="panel-body"><form  class="form-horizontal"  method="post">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="PUT">
          <div class="form-group">
          <label     class="control-label     col-sm-2">Kode Transaksi</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodeTransaksi); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Tanggal</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->TglOrder); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Produk</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->KodeProduk); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Jumlah</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->Jumlah); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Total Harga</label>
          <div class="col-sm-10">
          <p>Rp.<?php echo e(number_format($transaksi->TotalBayar)); ?>,-</p>
          </div>

          <label     class="control-label     col-sm-2">Alamat Pengiriman</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->AlamatKirim); ?></p>
          </div>

          <label     class="control-label     col-sm-2">Status Transaksi</label>
          <div class="col-sm-10">
          <p><?php echo e($transaksi->StatusTransaksi); ?></p>
          </div>
        </div>

        <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="<?php echo e(route('transaksi')); ?>"  type="button"   class="btn   btn-default">Kembali</a>
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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/showtransaksi.blade.php ENDPATH**/ ?>