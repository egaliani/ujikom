<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tunjangan_pegawai extends Model
{
    //
    protected $table = 'tunjangan_pegawais';
    protected $fillable = ['Kode_tunjangan_pegawai','Kode_tunjangan','Nip'];
    protected $visible = ['Kode_tunjangan_pegawai', 'Kode_tunjangan','Nip'];
    public $timestamps = true;

    public function Tunjangan(){
    	return $this->belongsTo('App\Tunjangan', 'Kode_tunjangan');
    }
    public function Pegawai(){
    	return $this->belongsTo('App\Pegawai', 'Nip');
    }
     public function Penggajian(){
        return $this->belongsTo('App\Penggajian', 'tunjangan_pegawai_id');
    }

}
