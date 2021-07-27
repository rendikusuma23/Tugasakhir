<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id_jenis');
            $table->enum('jenis_tingkatan',['taman kanak-kanak', 'kelompok bermain']);
            $table->string('nama_lengkap',50);
            $table->string('NIK_siswa',16);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('ttl');
            $table->string('agama');
            $table->string('anak_ke');
            $table->string('kewarganegaraan');
            $table->string('usia');
            $table->string('email');
            $table->string('telephone');
            $table->text('alamat_lengkap');
            $table->string('nama_ayah');
            $table->string('NIK_ayah',16);
            $table->string('tahunlahir_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_ibu');
            $table->string('NIK_ibu',16);
            $table->string('tahunlahir_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('jarak_tempuh');
            $table->string('jumlah_saudara');
            $table->string('jenis_pendaftaran');
            $table->integer('no_induk');
            $table->string('masuk_rombel');
            $table->enum('status',['Diterima','Belum Verifikasi']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
