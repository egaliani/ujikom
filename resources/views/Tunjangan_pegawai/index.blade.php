@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
<h1><center>Tunjangan Pegawai</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/Tunjangan_pegawai/create')}}" class="btn btn-success">Tambah Data</a>
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
	@foreach ($Tunjangan_pegawai as $data)
	<tr>
	<td>{{ $data->id }}</td>
	<td>{{ $data->Kode_tunjangan_pegawai }}</td>
	<td>{{ $data->Tunjangan->Besaran_uang }}</td>
	<td>{{ $data->Pegawai->User->name }}</td>
	<td><center><a href="{{route('Tunjangan_pegawai.edit', $data->id)}}" class="btn btn-warning">Update</a></center></td>  
	<td>  

	<center>{!! Form::open(['method' => 'DELETE', 'route'=>['Tunjangan_pegawai.destroy', $data->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-primary']) !!}</center>
	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
</tbody> 
</table>
@endsection                  
