<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan extends Model
{
     protected $table = 'tunjangans';
    protected $fillable = ['Kode_tunjangan', 'Kode_jabatan', 'Kode_golongan', 'Status', 'Jumlah_anak', 'Besaran_uang'];
    protected $visible = ['Kode_tunjangan', 'Kode_jabatan', 'Kode_golongan', 'Status', 'Jumlah_anak', 'Besaran_uang'];
    public $timestamps = true;


    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_golongan');
    }
    public function Tunjangan_pegawai(){
        return $this->hasMany('App\Tunjangan_pegawai', 'Kode_tunjangan'); 
    }
}
