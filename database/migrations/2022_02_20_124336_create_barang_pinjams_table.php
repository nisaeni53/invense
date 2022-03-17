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
        Schema::create('barang_pinjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('nama_peminjam');
            $table->string('jumlah_pinjam');
            $table->integer('jam_pelajaran');
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
        Schema::dropIfExists('barang_pinjams');
    }
};
