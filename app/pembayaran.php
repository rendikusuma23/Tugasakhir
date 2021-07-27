<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    //
    protected $fillable = [
        'id',
        'bulan',
        'no_induk',
        'tanggal',
        'spp',
        'keterangan',
        'siswa',
    ];
}
