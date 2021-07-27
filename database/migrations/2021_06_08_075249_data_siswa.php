<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('jenis_tingkatan',['taman kanak-kanak', 'kelompok bermain']);
            $table->string('nama_lengkap',50);
            $table->string('no_induk',8);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('ttl');
            $table->string('agama');
            $table->string('anak_ke');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('email');
            $table->string('telephone');        
            $table->text('alamat_lengkap');
            $table->year('tahun_masuk');
            $table->string('kelas');
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
        //
    }
}
