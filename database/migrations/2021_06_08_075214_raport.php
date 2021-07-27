<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Raport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raports', function (Blueprint $table) {
            $table->increments('id');
            $table->text('NAG');
            $table->text('fisik_monotorik');
            $table->text('sosial_emosional');
            $table->text('kognitif');
            $table->text('bahasa');
            $table->text('seni');
            $table->integer('siswa');
            $table->enum('semester',['genap','ganjil']);
            $table->string('tahun');
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
