<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai_perkembangan extends Model
{
    //
    protected $fillable = [
        'id',
        'kesimpulan_perkembangan',
        'kompetisi_indikator',
        'kegiatan_anak',
        'hasil_karya',
        'hasil_akhir'
    ];
}
