<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = [
        // 'tanggal_kolo',
        // 'tanggal_sidang',
        // 'terbit',
        // 'waktu_mulai',
        // 'waktu_selesai',
    ];


    protected $fillable = [
        'username',
        'email',
        'password',
        'level',
        'nama_mhs',
        'nim',
        'prodi',
        'no_telp',
        'judul',
        'hari_kolo',
        'hari_sidang',
        'tanggal_kolo',
        'tanggal_sidang',
        'terbit_penelitian',
        'terbit_kolo',
        'waktu_mulai_kolo',
        'waktu_selesai_kolo',
        'waktu_mulai_sidang',
        'waktu_selesai_sidang',
        'tempat',
        'tujuan',
        'penerima',
        'id_ketua'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ketua(){
        return $this->belongsTo('App\Ketua', 'id_ketua');
    }

    public function is_admin(){
        if ($this->admin) {
            return true;
        } else {
            return false;
        }

    }
}
