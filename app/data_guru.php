<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_guru extends Model
{
    //
    protected $fillable = [
        'id_jenis',
        'nama',
        'jabatan',
        'nuptk',
        'jenis_kelamin',
        'ttl',
        'agama',
        'pendidikan',
        'email',
        'telephone',
        'alamat'
    ];
}
