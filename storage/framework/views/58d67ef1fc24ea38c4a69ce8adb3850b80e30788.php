<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
<h1><center>Lembur Pegawai</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo e(url('/lembur_pegawai/create')); ?>" class="btn btn-primary">Tambah Data</a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</center></th>
<th>Kode Lembur Pegawai</th>
<th>Besaran Uang</th>
<th>Nama Pegawai</th>
<th>Jumlah Jam</center></th>
<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>

<tbody>
	<?php $__currentLoopData = $lembur_pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
	<td><?php echo e($data->id); ?></td>
	<td><?php echo e($data->Kode_lembur_pegawai); ?></td>
	<td><?php echo e($data->kategori_lembur->Besaran_uang); ?></td>
	<td><?php echo e($data->Pegawai->User->name); ?></td>
	<td><?php echo e($data->Jumlah_jam); ?></td>
	<td><center><a href="<?php echo e(route('lembur_pegawai.edit', $data->id)); ?>" class="btn btn-warning">Update</a></center></td>  
	<td>                                            
	<center><?php echo Form::open(['method' => 'DELETE', 'route'=>['lembur_pegawai.destroy', $data->id]]); ?>

	<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?></center>
	<?php echo Form::close(); ?>

	</td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody> 
</table>
<?php $__env->stopSection(); ?>                  

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>