<?php $__env->startSection('content'); ?>
<h1>Create Kategori Lembur</h1>
<?php echo Form::open(['url' => 'lembur_pegawai']); ?>

<div class="form-group">
<?php echo Form::label('Kode_lembur_pegawai', 'Kode Lembur Pegawai:'); ?>

<?php echo Form::text('Kode_lembur_pegawai' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('Kode_lembur', 'Kode Kategori Lembur:
'); ?>

<select name="Kode_jabatan" class="form-control">
	<?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Nip', 'Nip:
'); ?>

<select name="kode_golongan" class="form-control">
	<?php $__currentLoopData = $Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Nip); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Jumlah_jam', 'Jumlah jam:'); ?>

<?php echo Form::text('Jumlah_jam' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>