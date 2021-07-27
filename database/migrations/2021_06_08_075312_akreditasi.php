<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Akreditasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akreditasis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('stp');
            $table->text('standar_isi');
            $table->text('standar_proses');
            $table->text('sptp');
            $table->text('ssp');
            $table->text('standar_pengolahan');

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
