@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Lembur Pegawai</div>
                <div class="panel-body">
{!! Form::model($lembur_pegawai, ['method' => 'PATCH','route'=>['lembur_pegawai.update', $lembur_pegawai->id]]) !!}
<div class="form-group">
{!! Form::label('Kode_lembur_pegawai', 'Kode Lembur Pegawai:') !!}
{!! Form::text('Kode_lembur_pegawai' ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('Kode_lembur', 'Kode Kategori Lembur:
') !!}
<select name="Kode_lembur" class="form-control">
	@foreach($kategori_lembur as $data)
	<option value="{{$data->id}}">{{$data->Kode_lembur}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
{!! Form::label('Nip', 'Nip:
') !!}
<select name="Nip" class="form-control">
	@foreach($Pegawai as $data)
	<option value="{{$data->id}}">{{$data->Nip}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
{!! Form::label('Jumlah_jam', 'Jumlah jam:') !!}
{!! Form::text('Jumlah_jam' ,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
</div>
{!! Form::close() !!}
@stop