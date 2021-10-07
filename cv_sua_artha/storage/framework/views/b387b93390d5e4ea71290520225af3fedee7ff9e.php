<?php $__env->startSection('title', 'Transaksi'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
    <h2>Data Transaksi</h2>
    <!-- <a href="<?php echo e(route('home')); ?>" class="btn btn-default">Kembali</a> -->
    <form action="<?php echo e(route('transaksi.cetak')); ?>" method="GET">
    <div class="row">
        <div class="col-md-2">
            <input type="text" name="awal" class="form-control datepicker" placeholder="Tanggal Mulai" required>
        </div>
        <div class="col-md-2">
            <input type="text" name="akhir" class="form-control datepicker" placeholder="Tanggal Mulai" required>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i>Cetak</button>
        </div>
    </div>
    </form>
    <!-- <a href="<?php echo e(route('transaksi.cetak')); ?>" class="btn btn-primary">Cetak Laporan</a> -->
         <table class="table table-striped">          
                            <thead>           
                              <tr>                     
                                <th>Kode Transaksi</th>  
                                <th>Tanggal</th>                        
                                <th>Pelanggan</th>   
                                <th>Produk</th>   
                                <th>Jumlah</th>   
                                <th>Total Harga</th>   
                                <th>Status Transaksi</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodeTransaksi); ?></td>
                                 <td><?php echo e($p->TglOrder); ?></td> 
                                 <td><?php echo e($p->KodePelanggan); ?></td>
                                 <td><?php echo e($p->KodeProduk); ?></td>
                                 <td><?php echo e($p->Jumlah); ?></td> 
                                 <td>Rp. <?php echo e(number_format($p->TotalBayar)); ?>,-</td>
                                 <td><?php echo e($p->StatusTransaksi); ?></td>                          
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href=""> Detail</a>
                                 </td>         -->     
                                 <td style="width : 50px;">
                                  <a class="btn btn-success" href="<?php echo e(route('showtransaksi', $p->KodeTransaksi)); ?>">
                                    <i class="fas fa-fw fa-eye"></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('transaksi.destroy',$p->KodeTransaksi)); ?>">
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
                          <?php echo e($transaksi->links()); ?>

    <?php elseif(auth()->check() && auth()->user()->hasRole('admin')): ?>    
    <h2>Data Transaksi</h2>
        <!-- <a href="<?php echo e(route('tambahtransaksi')); ?>" class="btn btn-primary">Tambah Data</a>    -->
        <form action="<?php echo e(route('transaksi.cetak')); ?>" method="GET">
        <div class="row" style="margin-bottom:10px;" >
            <div class="col-md-2">
                <!-- <input type="date" name="awal" class="form-control datepicker" value="<?php echo e($awal ?? null); ?>" placeholder="Tanggal Mulai" required> -->
                <input class="date form-control" type="text" name="awal" id="awal" placeholder="Tanggal Awal" value="<?php echo e($awal); ?>" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
            <div class="col-md-2">
                <!-- <input type="date" name="akhir" class="form-control datepicker" value="<?php echo e($akhir ?? null); ?>" placeholder="Tanggal Akhir" required> -->
                <input class="date form-control" type="text" name="akhir" id="akhir" placeholder="Tanggal Akhir" value="<?php echo e($akhir); ?>" autofocus required>
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
        </div>
        </form>
        <!-- <a href="<?php echo e(route('transaksi.cetak')); ?>" class="btn btn-primary">Cetak Laporan</a> -->
        <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>                     
                                <th>Kode Transaksi</th>  
                                <th>Tanggal</th>                        
                                <th>Pelanggan</th>   
                                <th>Produk</th>   
                                <th>Jumlah</th>   
                                <th>Total Harga</th>   
                                <th>Status Transaksi</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodeTransaksi); ?></td>
                                 <td><?php echo e($p->TglOrder); ?></td> 
                                 <td><?php echo e($p->KodePelanggan); ?></td>
                                 <td><?php echo e($p->KodeProduk); ?></td>
                                 <td><?php echo e($p->Jumlah); ?></td> 
                                 <td>Rp. <?php echo e(number_format($p->TotalBayar)); ?>,-</td>
                                 <td><?php echo e($p->StatusTransaksi); ?></td>                          
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('showtransaksi', $p->KodeTransaksi)); ?>">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('edittransaksi', $p->KodeTransaksi)); ?>">
                                      <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('transaksi.destroy',$p->KodeTransaksi)); ?>">
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
    <h2>Transaksi Saya</h2>
         <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>                     
                                <th>No. Transaksi</th>  
                                <th>Tanggal</th>                          
                                <th>Produk</th>   
                                <th>Jumlah</th>   
                                <th>Total Harga</th>   
                                <th>Status Transaksi</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>      
                                 <td><?php echo e($p->KodeTransaksi); ?></td>
                                 <td><?php echo e($p->TglOrder); ?></td> 
                                 <td><?php echo e($p->KodeProduk); ?></td>
                                 <td><?php echo e($p->Jumlah); ?></td> 
                                 <td>Rp. <?php echo e(number_format($p->TotalBayar)); ?>,-</td>
                                 <td><?php echo e($p->StatusTransaksi); ?></td>                          
                                 <td style="width : 50px;">
                                  <a class="btn" href="<?php echo e(route('showtransaksi', $p->KodeTransaksi)); ?>">
                                    <i class="fas fa-fw fa-eye" style="color:green" ></i>
                                  </a>
                                 </td>             
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="<?php echo e(route('edittransaksi', $p->KodeTransaksi)); ?>">
                                      <i class="fas fa-fw fa-edit"></i>
                                  </a>
                                 </td>    -->          
                                 <td style="width : 50px;">
                                 <form method="post" action="<?php echo e(route('transaksi.destroy',$p->KodeTransaksi)); ?>">
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
	<script>
		$('body').on('click','#search',function(){
			var akhir = $('#akhir').val();
			var awal = $('#awal').val();
			if(awal != '' && akhir != ''){
				window.location.href = "http://localhost/cv_sua_artha/public/transaksi/search/"+awal+" "+akhir;
			}
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/transaksi.blade.php ENDPATH**/ ?>