<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai_perkembangan extends Model
{
    //
    protected $fillable = [
        'id',
        'siswa',
        'bulan',
        'kompetisi_indikators',
        'kegiatan_anak',
        'hasil_karya',
        'hasil_akhir',
        'kesimpulan'

    ];
}
