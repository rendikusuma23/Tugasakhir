<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    //
    protected $fillable =[
        'id',
        'NAG',
        'fisik_monotorik',
        'sosial_emosional',
        'kognitif',
        'bahasa',
        'seni',
        'siswa',
        'semester',
      ];
}
