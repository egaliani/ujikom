<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
                <h1><center>Pegawai</center></h1>
		<hr>
		<a href="<?php echo e(url('/Pegawai/create')); ?>" class="btn btn-primary">Tambah Data</a>
		<hr>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr class="danger">
					<th><center>No</center></th>
					<th><center>Nip</center></th>
					<th><center>Nama Pegawai</center></th>
					<th><center>Nama Jabatan</center></th>
					<th><center>Nama Golongan</center></th>
					<th><center>Photo</center></th>
					<th colspan="3"><center>Action</center></th>
				</tr>
			</thead>
			<tbody>
			<?php
				$no = 1;
			?>
				<?php $__currentLoopData = $Pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<td><center><?php echo e($no++); ?></center></td>
						<td><?php echo e($data->Nip); ?></td>
						<td><?php echo e($data->User->name); ?></td>
						<td><?php echo e($data->Jabatan->Nama_jabatan); ?></td>
						<td><?php echo e($data->Golongan->Nama_golongan); ?></td>
						<td>
							<center>
								<img src="<?php echo e(asset('/image/'.$data->Photo)); ?>" height="100px" width="100px">
							</center>
						</td>
						<td><center><a href="<?php echo e(route('Pegawai.edit', $data->id)); ?>" class="btn btn-warning">Update</a></center></td>
						<td><center>
							<?php echo Form::open(['method' => 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]); ?>

							<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

							<?php echo Form::close(); ?>

						</center></td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>