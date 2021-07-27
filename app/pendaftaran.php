<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    protected $fillable = [
        'id_jenis',
        'jenis_tingkatan',
        'nama_lengkap',
        'NIK_siswa',
        'jenis_kelamin',
        'ttl',
        'agama',
        'anak_ke',
        'kewarganegaraan',
        'usia',
        'email',
        'telephone',
        'alamat_lengkap',
        'nama_ayah',
        'NIK_ayah',
        'tahunlahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'nama_ibu',
        'NIK_ibu',
        'tahunlahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'tinggi_badan',
        'berat_badan',
        'jarak_tempuh',
        'jumlah_saudara',
        'jenis_pendaftaran',
        'no_induk',
        'masuk_rombel',
        'status'

    ];
}
