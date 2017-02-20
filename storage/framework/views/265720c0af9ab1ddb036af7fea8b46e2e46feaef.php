<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
<h1><center>Kategori Lembur</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/kategori_lembur/create')); ?>" class="btn btn-primary"><center>Tambah Data</center></a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode</th>
<th>Jabatan</th>
<th>Golongan</th>
<th>Besaran Uang</th>

<th colspan="3">Opsi</th>
</tr>
</thead>
<tbody>
	<?php $__currentLoopData = $kategori_lembur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($data->id); ?></td>
	<td><?php echo e($data->Kode_lembur); ?></td>
	<td><?php echo e($data->Jabatan->Nama_jabatan); ?></td>
	<td></td>
	
	<td><?php echo e($data->Besaran_uang); ?></td>
	
	<td><a href="<?php echo e(route('kategori_lembur.edit', $data->id)); ?>" class="btn btn-warning">Update</a></td>  
	<td>                                            
	<?php echo Form::open(['method' => 'DELETE', 'route'=>['kategori_lembur.destroy', $data->id]]); ?>

	<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> 
</table>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>