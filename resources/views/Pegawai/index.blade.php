@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
                <h1><center>Pegawai</center></h1>
		<hr>
		<a href="{{ url('/Pegawai/create') }}" class="btn btn-primary">Tambah Data</a>
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
				@foreach($Pegawai as $data)
					<tr>
						<td><center>{{ $no++ }}</center></td>
						<td>{{ $data->Nip }}</td>
						<td>{{ $data->User->name }}</td>
						<td>{{ $data->Jabatan->Nama_jabatan }}</td>
						<td>{{ $data->Golongan->Nama_golongan }}</td>
						<td>
							<center>
								<img src="{{asset('/image/'.$data->Photo)}}" height="100px" width="100px">
							</center>
						</td>
						<td><center><a href="{{ route('Pegawai.edit', $data->id) }}" class="btn btn-warning">Update</a></center></td>
						<td><center>
							{!! Form::open(['method' => 'DELETE', 'route' => ['Pegawai.destroy', $data->id]]) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
							{!! Form::close() !!}
						</center></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection