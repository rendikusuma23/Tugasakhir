<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kompetisi_indikator extends Model
{
    //
    protected $fillable = [
        'id',
        'nama',
        'lingkup_perkembangan',
        'bulan'
    ];
}
