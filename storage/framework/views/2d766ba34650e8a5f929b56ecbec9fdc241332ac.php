<html>
<?php $__env->startSection('code-header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('htmlheader_title'); ?>
	<title>Dokumentasi</title>
<style>
.kotak{
background:none;
border-style:solid;
border-color:black;
height: 195px;
width: 495px;
}

.thumbnails img {
	height: 80px;
	margin-left: 5px;
	margin-right: 5px;
	margin-top: 5px;
}

.gallery img {
	width:100%;
	height: auto;
}
.mean{
	text-align: justify;
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contentheader_title'); ?>
Dokumentasi Kegiatan
<?php $__env->stopSection(); ?>


<?php $__env->startSection('main-content'); ?>
<body>
<table style="margin-bottom: 10px;">
<tr>
<td>Nama Kegiatan</td>
<td>	<select>
		<option value="xplonation">Xplonation</option>
		</select></td>
</tr>

<tr>
<td>Tempat Kegiatan</td>
<td><input type="text" name="TempatK" value="FST, Kampus C Unair" readonly="readonly" /></td>
</tr>

<tr>
<td>Tanggal Pelaksanaan</td>
<td><input type="text" name="TanggalT" value="07/11/2015" readonly="readonly" /></td>
</tr>
</table>

<div class="kotak">
	<div class="thumbnails">
		<div class="gallery">
		<a target="_blank" href="<?php echo e(asset('/img/my-img/4.jpg')); ?>">
		<img src="<?php echo e(asset('/img/my-img/4.jpg')); ?>" style="width:150px;" alt=""/></a>

		<a target="_blank" href="<?php echo e(asset('/img/my-img/5.jpg')); ?>">
		<img src="<?php echo e(asset('/img/my-img/5.jpg')); ?>" style="width:150px;" alt=""/></a>

		<a target="_blank" href="<?php echo e(asset('/img/my-img/6.jpg')); ?>">
		<img src="<?php echo e(asset('/img/my-img/6.jpg')); ?>" style="width:150px;" alt=""/></a>
		</div>
	</div>
	<div class="mean">
	Xplonation adalah acara HIMSI yang mewadahi seluruh S1 Sistem Informasi UNAIR di bidang seni dan olah raga.
	</div>
	<button style="margin-left: 5px;">Download</button>
</div>

			</body>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('code-footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>