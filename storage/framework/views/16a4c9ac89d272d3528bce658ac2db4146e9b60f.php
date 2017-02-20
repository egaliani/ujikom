<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
<h1><center>Tunjangan</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/Tunjangan/create')); ?>" class="btn btn-primary"><center>Tambah Data</center></a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode</th>
<th>Jabatan</th>
<th>Golongan</th>
<th>Status</th>
<th>Jumlah Anak</th>
<th>Besaran Uang</th>

<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>
<tbody>
	<?php $__currentLoopData = $Tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($data->id); ?></td>
	<td><?php echo e($data->Kode_tunjangan); ?></td>
	<td><?php echo e($data->Jabatan->Nama_jabatan); ?></td>
	<td><?php echo e($data->Golongan->Nama_golongan); ?></td>
	<td><?php echo e($data->Status); ?></td>
	<td><?php echo e($data->Jumlah_anak); ?></td>
	<td><?php echo e($data->Besaran_uang); ?></td>
	
	<td><center><a href="<?php echo e(route('Tunjangan.edit', $data->id)); ?>" class="btn btn-warning">Update</a></center></td>  
	<td>                                            
	<center><?php echo Form::open(['method' => 'DELETE', 'route'=>['Tunjangan.destroy', $data->id]]); ?>

	<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?></center>
	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> 
</table>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>