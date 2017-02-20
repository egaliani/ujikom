@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Update Data Jabatan</div>
                <div class="panel-body">
{!! Form::model($Jabatan, ['method' => 'PATCH','route'=>['Jabatan.update', $Jabatan->id]]) !!}
<div class="form-group">
{!! Form::label('Kode_jabatan', 'Kode_jabatan:') !!}
{!! Form::text('Kode_jabatan' ,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Nama_jabatan', 'Nama_jabatan:
') !!}
{!! Form::text('Nama_jabatan' ,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Besaran_uang', 'Besaran_uang:
') !!}
{!! Form::text('Besaran_uang' ,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Update', ['class' => 'btn btn-danger']) !!}
</div>
{!! Form::close() !!}
@stop