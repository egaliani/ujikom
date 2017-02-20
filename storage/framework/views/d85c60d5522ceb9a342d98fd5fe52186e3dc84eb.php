<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
             
                <div class="panel-body">
<h1><center>Tunjangan Pegawai</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/Tunjangan_pegawai/create')); ?>" class="btn btn-success">Tambah Data</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode Tunjangan Pegawai</th>
<th>Besaran Uang</th>
<th>Nama Pegawai</th>
<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>

<tbody>
	<?php $__currentLoopData = $Tunjangan_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($data->id); ?></td>
	<td><?php echo e($data->Kode_tunjangan_pegawai); ?></td>
	<td><?php echo e($data->Tunjangan->Besaran_uang); ?></td>
	<td><?php echo e($data->Pegawai->Nip); ?></td>
	<td><a href="<?php echo e(route('Tunjangan_pegawai.edit', $data->id)); ?>" class="btn btn-warning">Update</a></td>  
	<td>                                            
	<?php echo Form::open(['method' => 'DELETE', 'route'=>['Tunjangan_pegawai.destroy', $data->id]]); ?>

	<?php echo Form::submit('Delete', ['class' => 'btn btn-primary']); ?>

	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> 
</table>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>