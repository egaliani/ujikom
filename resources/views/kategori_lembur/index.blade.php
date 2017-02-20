@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">PT PANASIA GROUP</div>
                <div class="panel-body">
<h1><center>Kategori Lembur</center></h1>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{url('/kategori_lembur/create')}}" class="btn btn-primary"><center>Tambah Data</center></a>
<hr>
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="bg-info">
<th>No</th>
<th>Kode</th>
<th>Nama Jabatan</th>
<th>Nama Golongan</th>
<th>Besaran Uang</th>

<th colspan="3"><center>Opsi</center></th>
</tr>
</thead>
<tbody>
	@foreach ($kategori_lembur as $data)
	<tr>
	<td>{{ $data->id }}</td>
	<td>{{ $data->Kode_lembur }}</td>
	<td>{{ $data->Jabatan->Nama_jabatan }}</td>
	<td>{{ $data->Golongan->Nama_golongan }}</td>
	<td>{{ $data->Besaran_uang}}</td>
	
	<td><center><a href="{{route('kategori_lembur.edit', $data->id)}}" class="btn btn-warning">Update</a></center></td>  
	<td>                                            
	<center>{!! Form::open(['method' => 'DELETE', 'route'=>['kategori_lembur.destroy', $data->id]]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}</center>
	{!! Form::close() !!}
	</td>
	</tr>
	@endforeach
</tbody> 
</table>
@endsection                  
