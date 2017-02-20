<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    //
    protected $table = 'jabatans';
    protected $fillable = ['Kode_jabatan', 'Nama_jabatan', 'Besaran_uang'];
    protected $visible = ['Kode_jabatan', 'Nama_jabatan', 'Besaran_uang'];
    public $timestamps = true;

    public function Kategori_lembur(){
    	return $this->hasMany('App\kategori_lembur', 'Kode_jabatan');
    }
    public function Pegawai(){
        return $this->hasMany('App\Pegawai', 'Kode_jabatan');
    }
    public function Tunjangans(){
        return $this->hasMany('App\Tunjangans', 'Kode_jabatan');
    }
}
