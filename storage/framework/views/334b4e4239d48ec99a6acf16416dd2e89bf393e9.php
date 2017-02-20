<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Data Golongan</div>
                <div class="panel-body">
<?php echo Form::model($Golongan, ['method' => 'PATCH','route'=>['Golongan.update', $Golongan->id]]); ?>

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
<?php echo Form::submit('Update', ['class' => 'btn btn-danger']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>