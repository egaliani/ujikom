<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Kategori_lembur</div>
                <div class="panel-body">
<?php echo Form::model($kategori_lembur, ['method' => 'PATCH','route'=>['kategori_lembur.update', $kategori_lembur->id]]); ?>

<div class="form-group">
<?php echo Form::label('Kode_lembur', 'Kode:'); ?>

<?php echo Form::text('Kode_lembur' ,null,['class'=>'form-control']); ?>

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
<?php echo Form::label('Besaran_uang', 'Besaran Uang:'); ?>

<?php echo Form::text('Besaran_uang' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::submit('Update', ['class' => 'btn btn-danger']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>