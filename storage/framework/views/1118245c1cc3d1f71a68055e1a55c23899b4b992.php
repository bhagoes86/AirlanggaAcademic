<?php $__env->startSection('htmlheader_title'); ?>
Edit KBK
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Edit KBK
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-header'); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
<style>
	.form-group label{
		text-align: left !important;
	}
</style>

	<?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(Session::has('alert-' . $msg)): ?>
<div class="alert alert-<?php echo e($msg); ?>">
	<p class="" style="border-radius: 0"><?php echo e(Session::get('alert-' . $msg)); ?></p>
</div>
	<?php echo Session::forget('alert-' . $msg); ?>

	<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="row">
	<div class="col-md-12">
		<div class="">

			<?php if(count($errors) > 0): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
			<br>
			<form id="tambahKBK" method="post" action="<?php echo e(url('/monsi/KBK/'.$kbk->id_kbk.'/edit')); ?>" enctype="multipart/form-data"  class="form-horizontal">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

				<!-- Menampilkan dropdown -->
				<div class="form-group">
					<label for="id_kbk" class="col-sm-2 control-label">ID KBK :</label>
					<div class="col-sm-8">
						<input type="number" class="form-control input-md" name="id_kbk" id="id_kbk" placeholder="Masukkan ID KBK" value="<?php echo e($kbk->id_kbk); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="jenis_kbk" class="col-sm-2 control-label">Jenis KBK :</label>
					<div class="col-sm-8">
					<input type="text" class="form-control input-md" name="jenis_kbk" id="jenis_kbk" placeholder="Masukkan Jenis KBK" value="<?php echo e($kbk->jenis_kbk); ?>">
					</div>
				</div>

				<!-- /.box-body -->
  				<br>
      			<button type="submit" class="btn btn-primary" style="margin-left: 450px;">Simpan</button>
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>