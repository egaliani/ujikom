<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriLembursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_lemburs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_lembur');
            $table->unsignedInteger('Kode_jabatan');
            $table->foreign('Kode_jabatan')->references('id')->on('jabatans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('Kode_golongan');
            $table->foreign('Kode_golongan')->references('id')->on('golongans')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Besaran_uang');
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
        Schema::dropIfExists('kategori_lemburs');
    }
}
