<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    //
    protected $fillable = [
        'id',
        'jenis_tingkatan',
        'nama_lengkap',
        'no_induk',
        'jenis_kelamin',
        'ttl',
        'agama',
        'anak_ke',
        'nama_ayah',
        'pekerjaan_ayah',
        'email',
        'telephone',
        'alamat_lengkap',
        'tahun_masuk',
        'kelas'

    ];
}
