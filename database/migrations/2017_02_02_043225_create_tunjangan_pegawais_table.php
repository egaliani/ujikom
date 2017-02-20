<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunjanganPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunjangan_pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_tunjangan_pegawai');
            $table->unsignedInteger('Kode_tunjangan');
            $table->foreign('Kode_tunjangan')->references('id')
                  ->on('tunjangans')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('Nip');
            $table->foreign('Nip')->references('id')->on('pegawais')
                  ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('tunjangan_pegawais');
    }
}
