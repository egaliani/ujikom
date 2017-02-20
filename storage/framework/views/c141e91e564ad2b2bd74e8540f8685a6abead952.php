<?php $__env->startSection('content'); ?>
<h1>Update Jabatan</h1>
<?php echo Form::model($Jabatan, ['method' => 'PATCH','route'=>['Jabatan.update', $Jabatan->id]]); ?>

<div class="form-group">
<?php echo Form::label('Kode_jabatan', 'Kode_jabatan:'); ?>

<?php echo Form::text('Kode_jabatan' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::label('Nama_jabatan', 'Nama_jabatan:
'); ?>

<?php echo Form::text('Nama_jabatan' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::label('Besaran_uang', 'Besaran_uang:
'); ?>

<?php echo Form::text('Besaran_uang' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>