<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<h1><center>Pegawai</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/Pegawai/create')); ?>" class="btn btn-primary">Tambah Data</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Nip</th>
<th>Nama User</th>
<th>Jabatan</th>
<th>Golongan</th>
<th>Photo</th>

<th colspan="3">Opsi</th>
</tr>
</thead>
<tbody>
	<?php $__currentLoopData = $Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($data->id); ?></td>
	<td><?php echo e($data->Nip); ?></td>
	<td><?php echo e($data->User->user_id); ?></td>
	<td><?php echo e($data->Jabatan->Kode_jabatan); ?></td>
	<td><?php echo e($data->Golongan->Kode_golongan); ?></td>
	<td><?php echo e($data->Photo); ?></td>
	
	<td><a href="<?php echo e(route('Pegawai.edit', $data->id)); ?>" class="btn btn-warning">Update</a></td>  
	<td>                                            
	<?php echo Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $data->id]]); ?>

	<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> 
</table>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>