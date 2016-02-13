<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndikatorProses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_proses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_proses')->unsigned();
            $table->integer('no_parent')->unsigned();
            $table->integer('urutan');
            $table->string('nama');
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
        Schema::drop('indikator_proses');
    }
}
