<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petaBidang')->insert([
            'nomor' => "PTB.12345/10/22",
            'judul' => "Peta Bidang 1",
            'deskripsi' => "Peta Bidang 1 merupakan peta yang diambil dari kecamatan x kabupaten y provinsi z",
            'namaGambar' => "PetaBidang1",
            'created_at'=> now(),
            'updated_at' => now()
        ]);
        DB::table('petaBidang')->insert([
            'nomor' => "PTB.12346/11/22",
            'judul' => "Peta Bidang 2",
            'deskripsi' => "Peta Bidang 2 merupakan peta yang diambil dari kecamatan x kabupaten y provinsi z",
            'namaGambar' => "PetaBidang2",
            'created_at'=> now(),
            'updated_at' => now()
        ]);
        DB::table('petaBidang')->insert([
            'nomor' => "PTB.12347/11/22",
            'judul' => "Peta Bidang 3",
            'deskripsi' => "Peta Bidang 3 merupakan peta yang diambil dari kecamatan x kabupaten y provinsi z",
            'namaGambar' => "PetaBidang3",
            'created_at'=> now(),
            'updated_at' => now()
        ]);
    }
}
