<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    protected $table = 'formulir';

    protected $fillable = [
        'jenis_surat',
        'id_pengesah',
    ];

    // public function mahasiswa(){
    //     return $this->belongsTo('App\Mahasiswa', 'id_mhs');
    // }

    // public function setWaktuAttribute($waktu){
    //     $this->attributes['waktu'] = Carbon\Carbon::createFromFormat('H:i', $waktu);
    // }
}
