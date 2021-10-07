<?php $__env->startSection('title', 'Custom Furniture'); ?>

<?php $__env->startSection('content_header'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->check() && auth()->user()->hasRole('owner')): ?>
    <h2>Oops!</h2>
    <h3>Halaman ini hanya untuk pelanggan.</h3>

    <?php elseif(auth()->check() && auth()->user()->hasRole('admin')): ?>    
    <h2>Oops!</h2>
    <h3>Halaman ini hanya untuk pelanggan.</h3>

    <?php else: ?>
    <h2>Furniture Custom</h2>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                <form action="<?php echo e(route('pesancustom.simpan')); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                    <label     class="control-label     col-sm-2">Jenis Furniture</label>
					<div class="col-sm-10">
					<select id="KodeJenis" name='KodeJenis' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<?php $__currentLoopData = $jenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaJenis); ?>" <?php if($id != '' && $id == $p->NamaJenis){ echo 'selected'; } ?> ><?php echo e($p->KodeJenis); ?> - <?php echo e($p->NamaJenis); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					</div>

                    <!--<label     class="control-label     col-sm-2">Body</label>
                    <div class="col-sm-10">
                    <select name='Body' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Solid Body">Solid Body</option>
                            <option value="Solid Body + Pickguard">Solid Body + Pickguard</option>
                            <option value="Single Cut">Single Cut</option>
                            <option value="Single Cut + Pickguard">Single Cut + Pickguard</option>
                            <option value="Custom Body">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>-->

                    <!--<label     class="control-label     ">Bahan (Body & Neck)</label>
                    <div class="col-sm-10">
                    <select name='Bahan' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Maple">Maple</option>
                            <option value="Rosewood">Rosewood</option>
                            <option value="Ebony">Ebony</option>
                    </select>
                    </div>-->

					<label     class="control-label     col-sm-2">Bahan</label>
					<div class="col-sm-10">
					<select name='Bahan' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<?php $__currentLoopData = $bahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaBahan); ?>"><?php echo e($p->NamaBahan); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					</div>
					<div style="display:flex;" >
						<?php $__currentLoopData = $bahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div style="margin:5px;" >
							<img src="<?php echo e(asset('gambar_bahan/' .$p->Gambar)); ?>" class="" alt="Product Image" style="width:150px;height:150px;" >
							<p style="text-align:center;font-size: 12px;" ><?php echo e($p->NamaBahan); ?></p>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					
					<label     class="control-label     col-sm-2">Motif</label>
					<div class="col-sm-10">
					<select name='Motif' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<?php $__currentLoopData = $motif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaMotif); ?>"><?php echo e($p->NamaMotif); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					</div>
					<div style="display:flex;" >
						<?php $__currentLoopData = $motif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div style="margin:5px;" >
							<img src="<?php echo e(asset('gambar_motif/' .$p->Gambar)); ?>" class="" alt="Product Image" style="width:150px;height:150px;" >
							<p style="text-align:center;font-size: 12px;" ><?php echo e($p->NamaMotif); ?></p>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					
					<label     class="control-label     col-sm-2">Model</label>
					<div class="col-sm-10">
					<select name='Model' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaModel); ?>"><?php echo e($p->NamaModel); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					</div>
					<div style="display:flex;" >
						<?php $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div style="margin:5px;" >
							<img src="<?php echo e(asset('gambar_model/' .$p->Gambar)); ?>" class="" alt="Product Image" style="width:150px;height:150px;" >
							<p style="text-align:center;font-size: 12px;" ><?php echo e($p->NamaModel); ?></p>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
					
					<label     class="control-label     col-sm-2">Ukuran</label>
					<div class="col-sm-10">
					<select name='Ukuran' class="form-control" autofocus required>
							<option value="">Pilih</option>
							<?php $__currentLoopData = $ukuran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<option value="<?php echo e($p->NamaUkuran); ?>"><?php echo e($p->NamaUkuran); ?></option>
  							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
					</div>

                    <!--<label     class="control-label     col-sm-2">Fret</label>
                    <div class="col-sm-10">
                    <select name='Fret' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="22">22</option>
                            <option value="24">24</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Fretboard</label>
                    <div class="col-sm-10">
                    <select name='Fretboard' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Maple">Maple</option>
                            <option value="Rosewood">Rosewood</option>
                            <option value="Ebony">Ebony</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Inlay</label>
                    <div class="col-sm-10">
                    <select name='Inlay' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Dot Inlay">Dot Inlay</option>
                            <option value="Block Inlay">Block Inlay</option>
                            <option value="Custom Inlay">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Headstock</label>
                    <div class="col-sm-10">
                    <select name='Headstock' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Cort">Cort</option>
                            <option value="Yamaha">Yamaha</option>
                            <option value="Fender">Fender</option>
                            <option value="Gibson">Gibson</option>
                            <option value="Epiphone">Epiphone</option>
                            <option value="Jackson">Jackson</option>
                            <option value="Schecter">Schecter</option>
                            <option value="Ibanez">Ibanez</option>
                            <option value="PRS">PRS</option>
                            <option value="Signature">Custom/Lainnya (sertakan gambar referensi)</option>
                    </select>
                    </div>

                    <label     class="control-label     col-sm-2">Ukuran Senar</label>
                    <div class="col-sm-10">
                    <select name='Senar' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="8 - 42 (Small)">8 - 42 (Small)</option>
                            <option value="9 - 46 (Medium)">9 - 46 (Medium)</option>
                            <option value="10 - 52 (Large)">10 - 52 (Large)</option>
                    </select>
                    </div>

                    <label     class="control-label     ">Referensi Pemain</label>
                    <div class="col-sm-10">
                    <select name='Kidal' class="form-control" autofocus required>
                            <option value="">Pilih</option>
                            <option value="Kidal">Kidal</option>
                            <option value="Tidak Kidal">Tidak Kidal</option>
                    </select>
                    </div>-->

                    <label     class="control-label     col-sm-2">Gambar Referensi</label>
                    <div class="col-sm-10">
                        <input type="file" name="file" autofocus required>
                    </div>

                    <label     class="control-label     col-sm-2">Komentar Tambahan</label>
                    <div class="col-sm-10">
                    <input   type="text" name="Komentar"  class="form-control" autofocus required>
                    </div>
                </div>

                <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <div class="btn btn-default">
                  <a href="<?php echo e(route('pesan')); ?>">Kembali</a>
                </div>
                <button   type="submit"   class="btn   btn-success">Order</button>
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

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
	<script>
		$('body').on('change','#KodeJenis',function(){
			var KodeJenis = $(this).val();
			window.location.href = "http://localhost/cv_sua_artha/public/pesancustoms/"+KodeJenis;
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\cv_sua_artha\resources\views/pesancustom.blade.php ENDPATH**/ ?>