<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLemburPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('lembur_pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_lembur_pegawai');
            $table->unsignedInteger('Kode_lembur');
            $table->foreign('Kode_lembur')->references('id')
                  ->on('kategori_lemburs')->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->unsignedInteger('Nip');
            $table->foreign('Nip')->references('id')->on('pegawais')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('Jumlah_jam');
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
        Schema::dropIfExists('lembur_pegawais');
    }
}
