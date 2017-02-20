<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Lembur Pegawai</div>
                <div class="panel-body">
<?php echo Form::model($lembur_pegawai, ['method' => 'PATCH','route'=>['lembur_pegawai.update', $lembur_pegawai->id]]); ?>

<div class="form-group">
<?php echo Form::label('Kode_lembur_pegawai', 'Kode Lembur Pegawai:'); ?>

<?php echo Form::text('Kode_lembur_pegawai' ,null,['class'=>'form-control']); ?>

</div>

<div class="form-group">
<?php echo Form::label('Kode_lembur', 'Kode Kategori Lembur:
'); ?>

<select name="Kode_lembur" class="form-control">
	<?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<option value="<?php echo e($data->id); ?>"><?php echo e($data->Kode_lembur); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>

<div class="form-group">
<?php echo Form::label('Nip', 'Nip:
'); ?>

<select name="Nip" class="form-control">
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
<?php echo Form::submit('Update', ['class' => 'btn btn-danger']); ?>

</div>
<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>