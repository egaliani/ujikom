<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Data Tunjangan</div>
                <div class="panel-body">
<?php echo Form::open(['url' => 'Tunjangan']); ?>

<div class="form-group">
<?php echo Form::label('Kode_tunjangan', 'Kode:'); ?>

<?php echo Form::text('Kode_tunjangan' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('Kode_jabatan', 'Jabatan:
'); ?>

<select name="Kode_jabatan" class="form-control">
	<?php $__currentLoopData = $Jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_jabatan); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Kode_golongan', 'Golongan:
'); ?>

<select name="Kode_golongan" class="form-control">
	<?php $__currentLoopData = $Golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_golongan); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Status', 'Status:'); ?>

<?php echo Form::text('Status' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('Jumlah_anak', 'Jumlah Anak:'); ?>

<?php echo Form::text('Jumlah_anak' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('Besaran_uang', 'Besaran Uang:'); ?>

<?php echo Form::text('Besaran_uang' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>