<?php $__env->startSection('title', 'Home - CV Sua Artha'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
        <h2>Dashboard</h2>
        <div class="row">
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo e($huser); ?></h3>

                <p>Jumlah User Saat Ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-users"></i>
              </div>
              <a href="<?php echo e(route('user')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo e($hjenis); ?></h3>

                <p>Jumlah Kategori</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-tags"></i>
              </div>
              <a href="<?php echo e(route('jenis')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo e($hproduk); ?></h3>

                <p>Total Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-box-open"></i>
              </div>
              <a href="<?php echo e(route('produk')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo e($htransaksi); ?></h3>

                <p>Transaksi Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-cash-register"></i>
              </div>
              <a href="<?php echo e(route('transaksi')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    <?php elseif(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <h2>Dashboard</h2>
        <div class="row">
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-info">
              <div class="icon">
                <i class="fas fa-fw fa-tags" style="left:15px;" ></i>
              </div>
			  <div class="inner" style="text-align:right;" >
                <h3><?php echo e($hjenis); ?></h3>

                <p>Jumlah Kategori</p>
              </div>
              <a href="<?php echo e(route('jenis')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger" style="background-color:#6f42c1 !important;" >
              <div class="inner" style="text-align:right;" >
                <h3><?php echo e($hproduk); ?></h3>

                <p>Jumlah Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-box-open" style="left:15px;" ></i>
              </div>
              <a href="<?php echo e(route('produk')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-warning">
              <div class="inner" style="text-align:right;color:white;" >
                <h3><?php echo e($hpesan); ?></h3>

                <p>Pesanan Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-file-alt" style="left:15px;" ></i>
              </div>
              <a href="<?php echo e(route('pesan')); ?>" class="small-box-footer" style="color:white !important;" >More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner" style="text-align:right;" >
                <h3><?php echo e($htransaksi); ?></h3>

                <p>Transaksi Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-cash-register" style="left:15px;" ></i>
              </div>
              <a href="<?php echo e(route('transaksi')); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    <?php else: ?>
          <h2>Semua Produk</h2>
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title float-right">
                  <!-- <label>Kategori: </label>
                  <select class="form-control">
                      <option value="">Semua</option>
                        <?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value=""><?php echo e($j->NamaJenis); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select> -->
                  <form action="<?php echo e(url()->current()); ?>">
                  <div class="row">
                    <div class="col-md-10">
                      <input type="text" name="keyword" class="form-control" placeholder="Cari produk..."value="<?php echo e(request('keyword')); ?>">
                    </div>
                    <div class="col-md-2 text-right">
                      <button type="submit" class="btn btn-success">
                        <i class="fas fa-fw fa-search"></i>
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              
              <div class="card-body">
                <div class="row">
                  <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-sm-2" style="border:1px solid #eaeaea;margin:5px;" >
                    <a href="<?php echo e(route('showproduk', $p->KodeProduk)); ?>" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="<?php echo e(asset('gambar_produk/' .$p->Gambar)); ?>" class="img-fluid mb-2" alt="white sample">
                    </a>
                    <label><?php echo e($p->NamaProduk); ?></label>
                    <label>Rp.<?php echo e(number_format($p->Harga)); ?>,-</label>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
              <?php echo e($produk->links()); ?>

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
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/home.blade.php ENDPATH**/ ?>