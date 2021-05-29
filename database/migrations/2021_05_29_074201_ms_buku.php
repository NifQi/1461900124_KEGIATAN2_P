<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_buku', function (Blueprint $table) {
            $table->increments('kode_buku');
            $table->string('kode_kategori', 10);
            $table->string('kode_penerbit', 30);
            $table->string('judul_buku', 100);
            $table->string('jumlah_buku', 30);
            $table->string('pengarang_buku', 50);
            $table->string('tahun_terbit_buku', 30);
            });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_buku');
    }
}
