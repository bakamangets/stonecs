<?php $__env->startSection('title', 'Custom Order'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
                        <h1>Oops!</h1>
                        <h3>Mau kemana? Silahkan navigasi melalui sidebar :)</h3>

    <?php elseif(auth()->check() && auth()->user()->hasRole('admin')): ?>    
                        <h1>Oops!</h1>
                        <h3>Mau kemana? Silahkan navigasi melalui sidebar :)</h3>

    <?php else: ?>
    <h2>Pesanan Saya</h2>
    <a href="<?php echo e(route('pesan')); ?>" class="btn btn-default" style="margin-bottom:10px;" >Kembali</a>
    <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>No. Pesanan</th>        
                                <th>Tanggal</th>
                                <th>Jenis Furniture</th>
                                <th>Total Harga</th>     
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
                                 <td><?php echo e($p->JenisFurniture); ?></td> 
                                 <td>Rp.<?php echo e(number_format($p->DP)); ?>,-</td>  
                                 <td><?php echo e($p->StatusPesan); ?></td>                        
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('showpesan',$p->KodePesan)); ?>">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
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
                          
    <?php endif; ?>
                         
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/mypesan.blade.php ENDPATH**/ ?>