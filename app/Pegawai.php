<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawais';
    protected $fillable = ['Nip','user_id', 'Kode_jabatan', 'Kode_golongan', 'Photo'];
    protected $visible = ['Nip','user_id', 'Kode_jabatan', 'Kode_golongan', 'Photo'];
    public $timestamps = true;


    public function User(){
    	return $this->belongsTo('App\User', 'user_id');
    }
    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_golongan');
    }
    public function Lembur_pegawai(){
        return $this->hasMany('App\Lembur_pegawai', 'Nip');
    }
    public function Tunjangan_pegawai(){
        return $this->hasOne('App\Tunjangan_pegawai', 'Nip');
    }
}
