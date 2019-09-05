<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengesah extends Model
{
    protected $table = 'pengesah';

    protected $fillable = [
        'nama_pengesah',
        'nip_pengesah',
    ];
}
