<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('metode_pembayaran');
            $table->Integer('dokter')->unsigned();
            $table->string('riwayat_penyakit');
            $table->integer('biaya');
            $table->string('no_telp');
            $table->timestamps();
            $table->foreign('dokter','dokter')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}
