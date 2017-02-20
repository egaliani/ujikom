<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembur_pegawai extends Model
{
    //
    protected $table = 'lembur_pegawais';
    protected $fillable = ['Kode_lembur_pegawai' ,'Kode_lembur', 'Nip', 'Jumlah_jam'];
    protected $visible = ['Kode_lembur_pegawai', 'Kode_lembur' ,'Nip', 'Jumlah_jam'];
    public $timestamps = true;

    public function Kategori_lembur(){
    	return $this->belongsto('App\kategori_lembur', 'Kode_lembur');
    }
    public function Pegawai(){
    	return $this->belongsto('App\Pegawai', 'Nip');
    }
}
