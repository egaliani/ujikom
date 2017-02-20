<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nip');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('Kode_jabatan');
            $table->foreign('Kode_jabatan')->references('id')->on('jabatans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedInteger('Kode_golongan');
            $table->foreign('Kode_golongan')->references('id')->on('golongans')
                  ->onUpdate('cascade')->onDelete('cascade');
            $table->string('Photo');
            
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
        Schema::dropIfExists('pegawais');
    }
}
