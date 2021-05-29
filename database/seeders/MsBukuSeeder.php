<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ms_buku;

    class MsBukuSeeder extends Seeder
    {
        /**
        * Run the database seeds.
        *
        * @return void
        */
        public function run()
        {
            $msbuku1 = new ms_buku;
            $msbuku1->kode_buku = "B001";
            $msbuku1->kode_kategori = "K001";
            $msbuku1->kode_penerbit = "P004";
            $msbuku1->judul_buku = "Boku No Hero Academia";
            $msbuku1->jumlah_buku = "4";
            $msbuku1->pengarang_buku = "Kohei Horikoshi";
            $msbuku1->tahun_terbit_buku = "2016";
            $msbuku1->save();

            $msbuku2 = new ms_buku;
            $msbuku2->kode_buku = "B002";
            $msbuku2->kode_kategori = "K002";
            $msbuku2->kode_penerbit = "P002";
            $msbuku2->judul_buku = "Dr. Stone";
            $msbuku2->jumlah_buku = "2";
            $msbuku2->pengarang_buku = "Riichiro Inagaki";
            $msbuku2->tahun_terbit_buku = "2017";
            $msbuku2->save();
    }
}
