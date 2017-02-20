<?php $__env->startSection('content'); ?>

<h1>Create Golongan</h1>
<?php echo Form::open(['url' => 'Golongan']); ?>

<div class="form-group">
<?php echo Form::label('Kode_golongan', 'Kode Golongan:'); ?>

<?php echo Form::text('Kode_golongan' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::label('Nama_golongan', 'Nama Golongan:
'); ?>

<?php echo Form::text('Nama_golongan' ,null,['class'=>'form-control']); ?>


</div>
<div class="form-group">
<?php echo Form::label('Besaran_uang', 'Besaran_uang:
'); ?>

<?php echo Form::text('Besaran_uang' ,null,['class'=>'form-control']); ?>

</div>
<div class="form-group">
<?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>