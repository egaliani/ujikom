@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Data Golongan</div>
                <div class="panel-body">

{!! Form::open(['url' => 'Golongan']) !!}
<div class="form-group">
{!! Form::label('Kode_golongan', 'Kode Golongan:') !!}
{!! Form::text('Kode_golongan' ,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('Nama_golongan', 'Nama Golongan:
') !!}
{!! Form::text('Nama_golongan' ,null,['class'=>'form-control']) !!}

</div>
<div class="form-group">
{!! Form::label('Besaran_uang', 'Besaran_uang:
') !!}
{!! Form::text('Besaran_uang' ,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop