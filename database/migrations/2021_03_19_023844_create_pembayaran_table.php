<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->integer('id_petugas');
            $table->string('nisn');
            $table->string('nama_siswa');
            $table->date('tgl_bayar');
            $table->string('bulan_bayar');
            $table->string('tahun_bayar');
            $table->integer('id_spp');
            $table->bigInteger('jumlah_bayar');
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
        Schema::dropIfExists('pembayaran');
    }
}
