<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perkembangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @ret   urn void
     */
    public function up()
    {
        Schema::create('lingkup_perkembangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nilai_agama_moral');
            $table->string('fisik_monotorik');
            $table->string('sosial_emosional');
            $table->string('kognitif');
            $table->string('bahasa');
            $table->string('seni');
            $table->timestamps();

        });
        Schema::create('kompetisi_indikators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('lingkup_perkembangan');
            $table->timestamps();

        });
        Schema::create('kesimpulan_perkembangans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa');
            $table->string('kesimpulan');
            $table->string('bulan');
            $table->timestamps();

        });
        Schema::create('nilai_perkembangans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kesimpulan_perkembangans');
            $table->integer('kompetisi_indikators');
            $table->enum('kegiatan_anak', ['BSH', 'BB','MB','BSB']);
            $table->enum('hasil_karya', ['BSH', 'BB','MB','BSB']);
            $table->enum('hasil_akhir', ['BSH', 'BB','MB','BSB']);
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
