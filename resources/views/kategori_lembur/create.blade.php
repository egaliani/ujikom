@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Data Kategori Lembur</div>
                <div class="panel-body">
{!! Form::open(['url' => 'kategori_lembur']) !!}
<div class="form-group">
{!! Form::label('Kode_lembur', 'Kode:') !!}
{!! Form::text('Kode_lembur' ,null,['class'=>'form-control']) !!}
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
{!! Form::label('Besaran_uang', 'Besaran Uang:') !!}
{!! Form::text('Besaran_uang' ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop