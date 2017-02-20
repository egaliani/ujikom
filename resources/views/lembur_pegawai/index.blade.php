@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
<h1><center>Lembur Pegawai</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/lembur_pegawai/create')}}" class="btn btn-primary">Tambah Data</a>
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
	@foreach ($lembur_pegawai as $data)
	<tr>
	<td>{{ $data->id }}</td>
	<td>{{ $data->Kode_lembur_pegawai }}</td>
	<td>{{ $data->kategori_lembur->Besaran_uang }}</td>
	<td>{{ $data->Pegawai->User->name}}</td>
	<td>{{ $data->Jumlah_jam }}</td>
	<td><center><a href="{{route('lembur_pegawai.edit', $data->id)}}" class="btn btn-warning">Update</a></center></td>  
	<td>                                            
	<center>{!! Form::open(['method' => 'DELETE', 'route'=>['lembur_pegawai.destroy', $data->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}</center>
	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
</tbody> 
</table>
@endsection                  
