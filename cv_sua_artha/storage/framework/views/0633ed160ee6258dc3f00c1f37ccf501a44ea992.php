<?php $__env->startSection('title', 'Pesanan'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
    <h2>Data Pesanan</h2>
    <table class="table table-striped">          
                            <thead>           
                              <tr>             
                                <th>Kode Pesanan</th>        
                                <th>Tanggal</th>
                                <th>Nama Pemesan</th>
                                <th>Alat Musik</th>
                                <th>Status Pesanan</th>   
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $pesan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodePesan); ?></td>
                                 <td><?php echo e($p->TglPesan); ?></td>
                                 <td><?php echo e($p->KodePelanggan); ?></td>
                                 <td><?php echo e($p->AlatMusik); ?></td>
                                 <td><?php echo e($p->StatusPesan); ?></td>                             
                                 <td style="width : 50px;">
                                  <a class="btn btn-success" href="<?php echo e(route('showpesan',$p->KodePesan)); ?>">
                                  <i class="fas fa-fw fa-eye"></i>
                                  </a>
                                 </td>             
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="">
                                  <i class="fas fa-fw fa-edit"></i>
                                  </a>
                                 </td>   -->           
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('pesan.destroy',$p->KodePesan)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-danger btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </button>
                                 </form>            
                                 </td>
                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
                                </tr>                
                            </tbody>         
                          </table>
                          <?php echo e($pesan->links()); ?>


    <?php elseif(auth()->check() && auth()->user()->hasRole('admin')): ?>    
    <h2>Data Pesanan</h2>
    <form action="<?php echo e(route('pesan.cetak')); ?>" method="GET">
        <div class="row" style="margin-bottom:10px;" >
            <div class="col-md-2">
                <!-- <input type="date" name="awal" class="form-control datepicker" value="<?php echo e($awal ?? null); ?>" placeholder="Tanggal Mulai" required> -->
                <input class="date form-control" type="text" id="awal" name="awal" placeholder="Tanggal Awal" value="<?php echo e($awal); ?>" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
            <div class="col-md-2">
                <!-- <input type="date" name="akhir" class="form-control datepicker" value="<?php echo e($akhir ?? null); ?>" placeholder="Tanggal Akhir" required> -->
                <input class="date form-control" type="text" id="akhir" name="akhir" placeholder="Tanggal Akhir" value="<?php echo e($akhir); ?>" autofocus required>
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
			<div class="col-md-2" style="margin-left:-90px;" >
				<a href="<?php echo e(route('settingpesan')); ?>" class="btn btn-primary">Setting</a>
            </div>
        </div>
        </form>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Kode Pesanan</th>        
                                <th>Tanggal</th>
                                <th>Nama Pemesan</th>
                                <th>Jenis Furniture</th>
                                <th>Status Pesanan</th>        
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $pesan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodePesan); ?></td>
                                 <td><?php echo e($p->TglPesan); ?></td>
                                 <td><?php echo e($p->KodePelanggan); ?></td>
                                 <td><?php echo e($p->JenisFurniture); ?></td>
                                 <td><?php echo e($p->StatusPesan); ?></td>                           
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('showpesan',$p->KodePesan)); ?>">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('editpesan',$p->KodePesan)); ?>">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('pesan.destroy',$p->KodePesan)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt" style="color:red;" ></i>
                                    </button>
                                 </form>            
                                 </td>
                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
                                </tr>                
                            </tbody>         
                          </table>

    <?php else: ?>
    <h2>Custom Order</h2>
    <div class="row">
                  <div class="col-sm-12">
                    <a href="<?php echo e(route('pesancustom')); ?>" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="http://localhost/cv_sua_artha/public/background.png" class="img-fluid mb-2" alt="custom furniture" style="width:100%;" >
                    </a>
                    <label>Custom Furniture</label>
                  </div>
	</div>

                  <!--<div class="col-sm-6">
                    <a href="<?php echo e(route('pesangitare')); ?>" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/t/N/v/taxonomy-electric-guitar-duosonic.png" class="img-fluid mb-2" alt="gitar elektrik">
                    </a>
                    <label>Gitar Elektrik</label>
                  </div>

                  <div class="col-sm-6">
                    <a href="<?php echo e(route('pesanbass')); ?>" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/W/D/A/taxonomy-acoustic-guitar-acoustic-bass.png" class="img-fluid mb-2" alt="bass akustik">
                    </a>
                    <label>Bass Akustik</label>
                  </div>

                  <div class="col-sm-6">
                    <a href="<?php echo e(route('pesanbasse')); ?>" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/s/b/5/taxonomy-bass-precision-american-ultra.png" class="img-fluid mb-2" alt="bass elektrik">
                    </a>
                    <label>Bass Elektrik</label>
                  </div>-->

        <a href="<?php echo e(route('mypesan')); ?>" class="btn btn-success">Pesanan Saya</a>
    <?php endif; ?>
                         
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
	<script>
		$('body').on('click','#search',function(){
			var akhir = $('#akhir').val();
			var awal = $('#awal').val();
			if(awal != '' && akhir != ''){
				window.location.href = "http://localhost/cv_sua_artha/public/pesan/search/"+awal+" "+akhir;
			}
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/pesan.blade.php ENDPATH**/ ?>