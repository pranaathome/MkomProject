<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $dates = [
        'tanggal',
        'terbit',
        // 'waktu_mulai',
        // 'waktu_selesai',
    ];

    protected $fillable = [
        'id',
        'nama_mhs',
        'nim',
        'prodi',
        'no_telp',
        'judul',
        'hari',
        'tanggal',
        'terbit',
        'waktu_mulai',
        'waktu_selesai',
        'tempat',
        'tujuan',
        'penerima',
        'id_ketua',
        'id_user'
    ];

    public function ketua(){
        return $this->belongsTo('App\Ketua', 'id_ketua');
    }

    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }

    // Relasi Mahasiswa - Formulir
    // public function formulir() {
    //     return $this->hasOne('App\Formulir', 'id_mhs');
    // }

    // Scope Dosen
    public function scopeDosen($query, $id_dosen){
        return $query->where('id_dosen', $id_dosen);
    }

    // Scope Program Studi
    public function scopeProgramStudi($query, $prodi){
        return $query->where('id_dosen', $prodi);
    }
}
