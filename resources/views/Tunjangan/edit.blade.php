@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Tunjangan</div>
                <div class="panel-body">
{!! Form::model($Tunjangan, ['method' => 'PATCH','route'=>['Tunjangan.update', $Tunjangan->id]]) !!}
<div class="form-group">
{!! Form::label('Kode_tunjangan', 'Kode:') !!}
{!! Form::text('Kode_tunjangan' ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('Kode_jabatan', 'Jabatan:
') !!}
<select name="Kode_jabatan" class="form-control">
	@foreach($Jabatan as $data)
	<option value="{{$data->id}}">{{$data->Kode_jabatan}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
{!! Form::label('Kode_golongan', 'Golongan:
') !!}
<select name="Kode_golongan" class="form-control">
	@foreach($Golongan as $data)
	<option value="{{$data->id}}">{{$data->Kode_golongan}}</option>
	@endforeach
</select>
</div>

<div class="form-group">
{!! Form::label('Status', 'Status:') !!}
{!! Form::text('Status' ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('Jumlah_anak', 'Jumlah Anak:') !!}
{!! Form::text('Jumlah_anak' ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('Besaran_uang', 'Besaran Uang:') !!}
{!! Form::text('Besaran_uang' ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
</div>
{!! Form::close() !!}
@stop