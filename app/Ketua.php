<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ketua extends Model
{
    protected $table = 'ketua';
    protected $fillable = [
        'nip_ketua',
        'nama_ketua',
        'id_anggota'
    ];

    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa', 'id_ketua');
    }

    public function anggota(){
        return $this->belongsTo('App\Anggota', 'id_anggota');
    }
}
