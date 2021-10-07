<?php $__env->startSection('title', 'Data Produk'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <h2>Data Produk</h2>
        <a href="<?php echo e(route('tambahproduk')); ?>" class="btn btn-success" style="margin-bottom:10px;" >Tambah Data</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Kode Produk</th>        
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>      
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodeProduk); ?></td>
                                 <td><?php echo e($p->KodeJenis); ?></td>
                                 <td><?php echo e($p->NamaProduk); ?></td> 
                                 <td>Rp.<?php echo e(number_format($p->Harga)); ?>,-</td>
                                 <td><?php echo e($p->Stok); ?></td>                           
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('showproduk', $p->KodeProduk)); ?>">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('editproduk', $p->KodeProduk)); ?>">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('produk.destroy',$p->KodeProduk)); ?>">
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
                          <?php echo e($produk->links()); ?>

    <?php elseif(auth()->check() && auth()->user()->hasRole('owner')): ?>
        <h2>Data Produk</h2>
        <a href="<?php echo e(route('home')); ?>" class="btn btn-default">Kembali</a>
        <!-- <a href="<?php echo e(route('tambahproduk')); ?>" class="btn btn-primary">Tambah Data</a> -->
                          <table class="table table-striped">          
                            <thead>           
                                <tr>             
                                <th>Kode Produk</th>        
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>      
                                <!-- <th colspan="3" style="text-align: center;"></th>            -->
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodeProduk); ?></td>
                                 <td><?php echo e($p->KodeJenis); ?></td>
                                 <td><?php echo e($p->NamaProduk); ?></td> 
                                 <td>Rp.<?php echo e(number_format($p->Harga)); ?>,-</td>
                                 <td><?php echo e($p->Stok); ?></td>                           
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="<?php echo e(route('showproduk', $p->KodeProduk)); ?>">
                                  <i class="fas fa-fw fa-eye"></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn btn-success" href="<?php echo e(route('editproduk', $p->KodeProduk)); ?>">
                                  <i class="fas fa-fw fa-edit"></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('produk.destroy',$p->KodeProduk)); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-danger btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </button>
                                 </form>            
                                 </td> -->
                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
                                </tr>                
                            </tbody>         
                          </table>       
                          <?php echo e($produk->links()); ?> 
    <?php else: ?>
                        <h1>Oops!</h1>
                        <h3>Mau kemana? Silahkan navigasi melalui sidebar :)</h3>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/produk.blade.php ENDPATH**/ ?>