@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">Tambah Data Pegawai</div>
                <div class="panel-body">
                <hr>

                      {!! Form::model($Pegawai, ['class' => 'form-horizontal',  'enctype' => 'multipart/form-data', 'method' => 'PATCH', 'route' => ['Pegawai.update', $Pegawai->id], 'files' => true]) !!}

                    <div class="form-group{{ $errors->has('Nip') ? ' has-error' : '' }}">
                        <label for="Nip" class="col-md-4 control-label">Nip</label>
                        <div class="col-md-6">
                            <input type="text" name="Nip" class="form-control" value="{{ $Pegawai->Nip }}" readonly>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nama Pegawai</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" value="{{ $Pegawai->User->name }}" readonly>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('Kode_jabatan') ? ' has-error' : '' }}">
                        <label for="Kode_jabatan" class="col-md-4 control-label">Nama Jabatan</label>
                        <div class="col-md-6">
                            <select name="Kode_jabatan" class="form-control">
                                @foreach($Jabatan as $data)
                                    <option value="{{ $data->id }}">{{ $data->Nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('Kode_golongan') ? ' has-error' : '' }}">
                        <label for="golongan_id" class="col-md-4 control-label">Nama Golongan</label>
                        <div class="col-md-6">
                            <select name="Kode_golongan" class="form-control">
                                @foreach($Golongan as $data)
                                    <option value="{{ $data->id }}">{{ $data->Nama_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('Photo') ? ' has-error' : '' }}">
                        <label for="Photo" class="col-md-4 control-label">Photo</label>
                            <div class="col-md-6">
                                <input id="Photo" type="file" class="form-control" name="Photo" value="{{ old('Photo') }}" required autofocus>
                            </div>
                        </div>
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-danger">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
               </div>
           </div>
       </div>
    </div>
</div>  
@endsection