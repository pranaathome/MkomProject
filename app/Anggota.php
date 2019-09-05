<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [
        'nama_anggota',
        'nip_anggota'
    ];

    public function ketua(){
        return $this->hasMany('App\Ketua', 'id_anggota');
    }
}
