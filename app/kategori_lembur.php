<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori_lembur extends Model
{
    //
    protected $table = 'kategori_lemburs';
    protected $fillable = ['Kode_lembur', 'Kode_jabatan', 'Kode_golongan', 'Besaran_uang'];
    protected $visible = ['Kode_lembur', 'Kode_jabatan', 'Kode_golongan', 'Besaran_uang'];
    public $timestamps = true;

    public function Jabatan(){
    	return $this->belongsTo('App\Jabatan', 'Kode_jabatan');
    }
    public function Golongan(){
    	return $this->belongsTo('App\Golongan', 'Kode_golongan');
    }
}
    
