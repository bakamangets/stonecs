<?php $__env->startSection('title', 'Detail Bahan'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Detail bahan</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <h1></h1>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="<?php echo e(asset('gambar_bahan/' .$bahan->Gambar)); ?>" class="product-image" alt="Bahan Image">
              </div>             
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo e($bahan->NamaBahan); ?></h3>
              <p><?php echo e($bahan->KodeJenis); ?></p>

              <hr>

              <div class="mt-4">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="<?php echo e(route('settingpesan')); ?>">Kembali</a>
                </div>
              </div>


            </div>
          </div>
        </div>
    <?php else: ?>
        <h1></h1>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="<?php echo e(asset('gambar_produk/' .$produk->Gambar)); ?>" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo e($produk->NamaProduk); ?></h3>
              <p><?php echo e($produk->KodeJenis); ?></p>

              <hr>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp.<?php echo e(number_format($produk->Harga)); ?>,-
                </h2>
                <h4 class="mt-0">
                  <small> *Harga sudah termasuk pajak & ongkos kirim. </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-success btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                  <a href="<?php echo e(route('tambahkeranjang', $produk->KodeProduk)); ?>" class="text-white">Beli</a>
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="<?php echo e(route('home')); ?>">Kembali</a>
                </div>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Tersedia</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?php echo e($produk->Deskripsi); ?></div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"><?php echo e($produk->Stok); ?> pcs</div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/showbahan.blade.php ENDPATH**/ ?>