<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunjangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunjangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_tunjangan');
            $table->unsignedInteger('Kode_jabatan');
            $table->foreign('Kode_jabatan')->references('id')->on('jabatans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('Kode_golongan');
            $table->foreign('Kode_golongan')->references('id')->on('golongans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('Status');
            $table->integer('Jumlah_anak');
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
        Schema::dropIfExists('tunjangans');
    }
}
