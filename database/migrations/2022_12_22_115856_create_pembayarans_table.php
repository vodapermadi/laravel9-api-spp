<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_petugas');
            $table->foreign('id_petugas')->references('id')->on('officers');

            $table->unsignedBigInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswas');
            
            $table->dateTime('tanggal_bayar')->nullable()->useCurrent()->onUpdate('CURRENT_TIMESTAMP');;

            $table->unsignedBigInteger('id_spp');
            $table->foreign('id_spp')->references('id')->on('spps');
            $table->integer('jumlah_bayar');

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
        Schema::dropIfExists('pembayarans');
    }
};
