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
            $table->string('nama');
            $table->timestamps();

        });
        Schema::create('kompetisi_indikators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('lingkup_perkembangan');
            $table->string('bulan');
            $table->timestamps();

        });

        Schema::create('nilai_perkembangans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('siswa');
            $table->string('bulan');
            $table->integer('kompetisi_indikators');
            $table->enum('kegiatan_anak', ['BSH', 'BB','MB','BSB']);
            $table->enum('hasil_karya', ['BSH', 'BB','MB','BSB']);
            $table->enum('hasil_akhir', ['BSH', 'BB','MB','BSB']);
            $table->string('kesimpulan');
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
